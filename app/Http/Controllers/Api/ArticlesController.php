<?php

namespace App\Http\Controllers\Api;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use  App\Repositories\ArticleRepository;

class ArticlesController extends ApiController
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        parent::__construct();

        $this->article = $article;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->response->collection(
            $this->article->pageWithRequest($request)
        );
    }

    /**
     * 存储文章内容
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ArticleRequest $request)
    {
        $input = $request->all();

        $input['user_id'] = \Auth::id();
        $input['last_user_id'] = \Auth::id();
        $input['content'] = $input['content'];

        $this->article->store($input);
        $this->article->syncTag(json_decode($request->get('tags')));

        return response()->json(true);
    }

    /**
     * 删除文章
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = Article::destroy($id);

        return response()->json($result);
    }

    /**
     * 编辑文章
     *
     * @param int $id
     * @return mixed
     */
    public function edit($id)
    {
        $article = $this->article->getById($id);

        return $this->response->item($article);
    }

    /**
     * 修改文章
     *
     * @param ArticleRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ArticleRequest $request, $id)
    {
        $input = $request->all();

        $input['content'] = $input['content'];

        $this->article->update($id, $input);
        $this->article->syncTag(json_decode($input['tags'], true));

        return response()->json(true);
    }

}
