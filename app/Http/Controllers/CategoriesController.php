<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /**
     * 分类主页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories = Category::pageWithRequest($request);

        return view('category.index', compact('categories', 'keyword'));
    }

    /**
     * 创建
     *
     * @return mixed
     */
    public function create()
    {
        return view('category.create');
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
        $result = (new Category())->fill($request->all())->save();

        return response()->json($result);
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
            $category = Category::find($id);
            return view('category.update', compact('category'));
        } else {
            $input = $request->only('name', 'description');
            $result = Category::where('id', $id)->update($input);

            return response()->json($result);
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
