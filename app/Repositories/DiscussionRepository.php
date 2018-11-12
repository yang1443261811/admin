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
            $this->syncTag($discussion, json_decode($data['tags']));
        }

        return $discussion;
    }

    /**
     * Sync the tags for the discussion.
     *
     * @param  int $number
     * @return Paginate
     */
    public function syncTag(Discussion $discussion, array $tags)
    {
        return $discussion->tags()->sync($tags);
    }

}