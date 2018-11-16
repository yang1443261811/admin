<?php

namespace App\Repositories;

use App\Discussion;

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
//        $this->model = $this->checkAuthScope();

        $discussion = $this->model->findOrFail($id);

        if (is_array($data['tags'])) {
            $this->syncTag($discussion, $data['tags']);
        } else {
            $this->syncTag($discussion, $data['tags']);
        }

        return $discussion->update($data);
    }

}