<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\Article;
use App\Category;
use Illuminate\Http\Request;
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
        return $this->response->collection($this->article->pageWithRequest($request));
    }

    /**
     * 存储文章内容
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $this->validator($request);
        $input = $request->all();

        $input['user_id'] = \Auth::id();
        $input['last_user_id'] = \Auth::id();
        $input['content'] = $input['content'];
        $input['is_draft'] = isset($input['is_draft']);
        $input['is_original'] = isset($input['is_original']);

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
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validator($request);

        $input = $request->all();

        $input['is_draft'] = isset($input['is_draft']);
        $input['is_original'] = isset($input['is_original']);
        $input['content'] = $input['content'];

        $this->article->update($id, $input);
        $this->article->syncTag(json_decode($input['tags'], true));

        return response()->json(true);
    }

    /**
     * 验证文章字段
     *
     * @param Request $request
     * @return void
     */
    protected function validator(Request $request)
    {
        $rules = [
            'title'       => 'bail|required|min:3',
            'subtitle'    => 'bail|required|min:2',
            'content'     => 'bail|required',
            'category_id' => 'bail|required',
            'tags'        => 'bail|required',
            'page_image'  => 'bail|required',
        ];
        $messages =  [
            'title.required'       => '标题必填',
            'title.min'            => '标题至少三个字符',
            'subtitle.required'    => '副标题必填',
            'subtitle.min'         => '副标题至少三个字符',
            'content.required'     => '文章内容必填',
            'category_id.required' => '文章分类必选',
            'tags.required'        => '文章标签必填',
            'page_image.required'  => '文章封面必填',
        ];

         $this->validate($request, $rules, $messages);
    }
}
