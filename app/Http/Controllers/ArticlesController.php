<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $articles = Article::pageWithRequest($request);

        return view('article.index', compact('articles', 'keyword'));
    }

    /**
     * 创建新文章
     *
     * @return mixed
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('article.create', compact('tags', 'categories'));
    }

    /**
     * 存储文章内容
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $input = $request->all();
        $input = array_merge($input, [
            'user_id'     => 1,
            'last_user_id'=> 1,
            'is_draft'    => isset($input['is_draft']),
            'is_original' => isset($input['is_original'])
        ]);
        $article = new Article();
        $article->fill($input)->save();
        $article->tags()->sync($input['tags']);

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
        $tags = Tag::all();
        $categories = Category::all();
        $article = Article::find($id);

        return view('article.update', compact('article', 'categories', 'tags'));
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
        $input = $request->all();
        $input = array_merge($input, [
            'is_draft'    => isset($input['is_draft']),
            'is_original' => isset($input['is_original'])
        ]);
        $model = Article::find($id);
        $result = $model->fill($input)->save();
        $model->tags()->sync($input['tags']);

        return response()->json($result);
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
            'category_id.required' => '文章分类必填',
            'tags.required'        => '文章标签必填',
            'page_image.required'  => '文章封面必填',
        ];

         $this->validate($request, $rules, $messages);
    }
}
