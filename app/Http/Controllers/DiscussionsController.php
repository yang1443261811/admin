<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {
        $discussions = Discussion::orderBy('created_at', 'desc')
            ->paginate(20);
        return view('discussion.index', compact('discussions'));
    }

    /**
     * 创建
     *
     * @return mixed
     */
    public function create()
    {
        return view('discussion.create', ['tags' => Tag::all()]);
    }

    /**
     * 存储数据
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $input = $request->all() + ['user_id' => 1, 'last_user_id' => 1];
        $discussion = new Discussion();
        $discussion->fill($input)->save();
        $discussion->tags()->sync($input['tags']);

        return response()->json(true);
    }

    /**
     * 编辑
     *
     * @param int $id
     * @return mixed
     */
    public function edit($id)
    {
        $tags =  Tag::all();
        $discussion = Discussion::find($id);
        return view('discussion.update', compact('tags', 'discussion'));
    }

    /**
     * 更新
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validator($request);
        $input = $request->all();
        $model = Discussion::find($id);
        $model->fill($input)->save();
        $model->tags()->sync($input['tags']);
        return response()->json(true);
    }

    /**
     * 删除
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = Discussion::destroy($id);
        return response()->json($result);
    }

    /**
     * 验证文章字段
     *
     * @param Request $request
     * @return mixed
     */
    protected function validator(Request $request)
    {
        $rules = [
            'title'   => 'bail|required|min:3',
            'content' => 'bail|required',
            'tags'    => 'bail|required',
        ];
        $messages =  [
            'title.required'   => '标题必填',
            'title.min'        => '标题至少三个字符',
            'content.required' => '文章内容必填',
            'tags.required'    => '文章标签必填',
        ];

        return $this->validate($request, $rules, $messages);
    }
}
