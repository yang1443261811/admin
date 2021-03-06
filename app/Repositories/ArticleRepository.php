<?php

namespace App\Repositories;

use App\Article;
use App\Scopes\DraftScope;

class ArticleRepository
{
    use BaseRepository;

    protected $mode;

    public function __construct(Article $article, VisitorRepository $visitor)
    {
        $this->model = $article;
        $this->visitor = $visitor;
    }

    /**
     * 分页获取数据
     *
     * @param int $number
     * @param string $sort
     * @param string $sortColumn
     * @return mixed
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * 获取文章并记录访问日志
     *
     * @param int $article_id
     * @return mixed
     */
    public function browseArticles($article_id)
    {
        $model = $this->model->find($article_id);

        $model->increment('view_count');

        $this->visitor->log($article_id);

        return $model;
    }

    /**
     * 按文章标签查找文章
     *
     * @param string $tag
     * @param int $number
     * @return mixed
     */
    public function findByTag($tag, $number = 10)
    {
        $this->model = $this->checkAuthScope();

        return $this->model
                    ->where('tags', 'like', "%{$tag}%")
                    ->take($number)
                    ->get();
    }

    /**
     * Sync the tags for the article.
     *
     * @param  array $tags
     * @return mixed
     */
    public function syncTag(array $tags)
    {
        $this->model->tags()->sync($tags);
    }

    /**
     * 分页获取数据
     *
     * @param $request
     * @param int $number
     * @param string $sort
     * @param string $sortColumn
     * @return mixed
     */
    public function pageWithRequest($request, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        $keyword = $request->get('keyword');

        return $this->model->when($keyword, function ($query) use ($keyword) {
            $query->where('title', 'like', "%{$keyword}%")
                ->orWhere('subtitle', 'like', "%{$keyword}%");
        })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Get the article record without draft scope.
     *
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->withoutGlobalScope(DraftScope::class)->findOrFail($id);
    }

    /**
     * Update the article record without draft scope.
     *
     * @param  int $id
     * @param  array $input
     * @return boolean
     */
    public function update($id, $input)
    {
        $this->model = $this->model->withoutGlobalScope(DraftScope::class)->findOrFail($id);

        return $this->save($this->model, $input);
    }

    /**
     * Search the articles by the keyword.
     *
     * @param  string $key
     * @return collection
     */
    public function search($key)
    {
        $key = trim($key);

        return $this->model
            ->where('title', 'like', "%{$key}%")
            ->orderBy('published_at', 'desc')
            ->get();

    }


    /**
     * Check the auth and the model without global scope when user is the admin.
     *
     * @return Model
     */
    public function checkAuthScope()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            $this->model = $this->model->withoutGlobalScope(DraftScope::class);
        }

        return $this->model;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this->model, $name)) {
            return call_user_func_array([$this->model, $name], $arguments);
        }
    }
}