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

}