<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }


    /**
     * 分类主页
     *
     * @return mixed
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(20);

        return view('category.index', compact('categories'));
    }

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
     * @param Request $request
     * @return Response
     */
    public function delete(Request $request, $id)
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
    public function update(Request $request)
    {
        if ($request->method() == 'GET') {
            $category = Category::find($request->segment(3));

            return view('category_update', compact('category'));
        } else {
            $input = $request->only('id', 'name', 'description');

            $result = Category::where('id', $input['id'])->update($input);

            return response()->json($result);
        }
    }

    /**
     * 设置验证规则
     *
     * @param array $data
     * @return mixed
     */
    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required|min:2|max:16',
            'description' => 'required|max:255',
        ]);
    }
}
