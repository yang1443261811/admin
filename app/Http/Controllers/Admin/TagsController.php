<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * 主页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $tags = Tag::pageWithRequest($request);

        return view('back.tag.index', compact('tags', 'keyword'));
    }

    public function create()
    {
        return view('back.tag.create');
    }

    /**
     * 新增
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $result = (new Tag())->fill($request->all())->save();

        return response()->json($result);
    }

    /**
     * 删除
     *
     * @param int $id
     * @return Response
     */
    public function delete($id)
    {
        $result = Tag::destroy($id);

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
            $tag = Tag::find($id);
            return view('back.tag.update', compact('tag'));
        } else {
            $input = $request->only('tag', 'title', 'meta_description');
            $result = Tag::where('id', $id)->update($input);

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
            'tag' => 'required|min:2|max:16',
            'title' => 'required|min:2|max:32',
            'meta_description' => 'required|max:255',
        ]);
    }
}
