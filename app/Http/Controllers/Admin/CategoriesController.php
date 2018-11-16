<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * 分类主页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories =  $this->category->pageWithRequest($request);

        return view('back.category.index', compact('categories', 'keyword'));
    }

    /**
     * 创建
     *
     * @return mixed
     */
    public function create()
    {
        return view('back.category.create');
    }

    /**
     * 新增分类
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validator($request);

        $this->category->store($request->all());

        return response()->json(true);
    }

    /**
     * 删除分类
     *
     * @return Response
     */
    public function delete($id)
    {
        $count = Article::where('category_id', $id)->count();
        if ($count > 0) {
            return response()->json(['success' => false, 'msg' => '分类下有文章不能删除']);
        }

        $result = Category::destroy($id);

        return response()->json($result);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return mixed|resource
     */
    public function update(Request $request, $id)
    {
        if ($request->method() == 'GET') {
            return view('back.category.update', ['category' =>  Category::find($id)]);
        } else {
            $this->validator($request);
            $this->category->update($id, $request->only('name', 'description'));

            return response()->json(true);
        }
    }

    /**
     * 设置验证规则
     *
     * @param Request $request
     * @return void
     */
    protected function validator(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|min:2|max:64',
            'path'        => 'required',
            'description' => 'required|max:255',
        ], [
            'name.required'       => '分类名称必填',
            'name.min'            => '分类名称至少两位',
            'name.max'            => '分类名称太长',
            'path.required'       => 'path不能为空',
            'description.required'=> '描述必填',
            'description.max'     => '描述太长',
        ]);
    }
}
