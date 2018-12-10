<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;

class PostController extends Controller
{
    protected $article;

    protected $comment;

    public function __construct(ArticleRepository $article, CommentRepository $comment)
    {
        $this->article = $article;
        $this->comment = $comment;
    }

    /**
     * 文章主页
     *
     * @return mixed
     */
    public function index()
    {
        return view('post.article', ['articles' =>  $this->article->page()]);
    }

    /**
     * 显示一篇文章
     *
     * @param int $id
     * @return mixed
     */
    public function show($id)
    {
        $articles = $this->article->browseArticles((int) $id);

        return view('post.details', compact('articles'));
    }

    /**
     * 按标签查找文章
     *
     * @param string $tag
     * @return mixed
     */
    public function find($tag)
    {
        $articles = $this->article->findByTag($tag);

        return view('post.tag', compact('articles', 'tag'));
    }

    /**
     * 搜索文章
     *
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        $keyword = trim($request->get('q'));

        $articles = $this->article->search($keyword);

        return view('post.search', compact('articles', 'keyword'));
    }

}