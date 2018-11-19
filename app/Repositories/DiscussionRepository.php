<?php

namespace App\Repositories;

use App\Discussion;
use App\Scopes\StatusScope;

class DiscussionRepository
{
    use BaseRepository;

    protected $mode;

    public function __construct(Discussion $discussion)
    {
        $this->model = $discussion;
    }

    /**
     * 分页获取数据
     *
     * @param int    $number
     * @param string $sort
     * @param string $sortColumn
     * @return mixed
     */
    public function page($number = 20, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Get number of the records.
     *
     * @param  Request $request
     * @param  integer $number
     * @param  string  $sort
     * @param  string  $sortColumn
     * @return collection
     */
    public function pageWithRequest($request, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        $keyword = $request->get('keyword');

        return $this->model->when($keyword, function ($query) use ($keyword) {
            $query->where('title', 'like', "%{$keyword}%")
                ->orWhereHas('user', function ($query) use ($keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                });
        })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Store a new discussion.
     * @param  array $data
     * @return Model
     */
    public function store($data)
    {
        $discussion = $this->model->create($data);

        if (is_array($data['tags'])) {
            $this->syncTag($discussion, $data['tags']);
        } else {
            $this->syncTag($discussion, $data['tags']);
        }

        return $discussion;
    }

    /**
     * Update a record by id.
     *
     * @param  int $id
     * @param  array $data
     * @return boolean
     */
    public function update(int $id, array $data)
    {
        $this->model = $this->checkAuthScope();

        $discussion = $this->model->findOrFail($id);

        if (is_array($data['tags'])) {
            $this->syncTag($discussion, $data['tags']);
        } else {
            $this->syncTag($discussion, $data['tags']);
        }

        return $discussion->update($data);
    }

    /**
     * Update a record by id without tag.
     *
     * @param  int $id
     * @param  array $data
     * @return boolean
     */
    public function updateWithoutTags(int $id, array $data)
    {
        $this->model = $this->checkAuthScope();

        $discussion = $this->model->findOrFail($id);

        return $discussion->update($data);
    }

    /**
     * @param Discussion $discussion
     * @param array $tags
     * @return mixed
     */
    public function syncTag(Discussion $discussion, array $tags)
    {
        return $discussion->tags()->sync($tags);
    }

    /**
     * Get the discussion record without draft scope.
     *
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        $this->model = $this->checkAuthScope();

        return $this->model->findOrFail($id);
    }

    /**
     * Check the auth and the model without global scope when user is the admin.
     *
     * @return Model
     */
    public function checkAuthScope()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            $this->model = $this->model->withoutGlobalScope(StatusScope::class);
        }

        return $this->model;
    }

}