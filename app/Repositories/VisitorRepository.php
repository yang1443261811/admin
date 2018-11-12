<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorRepository
{
    use BaseRepository;

    protected $mode;

    public function __construct(Visitor $visitor, Request $request)
    {
        $this->model = $visitor;
        $this->request = $request;
    }

    /**
     * 记录访问日志
     *
     * @param $article_id
     * @return void
     */
    public function log($article_id)
    {
        $ip = $this->request->getClientIp();

        if ($this->hasArticleIp($article_id, $ip)) {

            $this->model->where('article_id', $article_id)
                ->where('ip', $ip)
                ->increment('clicks');

        } else {
            $data = [
                'ip'         => $ip,
                'article_id' => $article_id,
                'clicks'     => 1
            ];
            $this->model->firstOrCreate($data);
        }
    }

    /**
     * 文章是否已经被某个IP访问过
     *
     * @param $article_id
     * @param $ip
     * @return bool
     */
    public function hasArticleIp($article_id, $ip)
    {
        return $this->model
            ->where('article_id', $article_id)
            ->where('ip', $ip)
            ->count() ? true : false;
    }
}