<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $comments = Comment::pageWithRequest($request);

        return view('back.comment.index', compact('comments', 'keyword'));
    }

    /**
     * 编辑
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return view('back.comment.update', ['comment' => Comment::find($id)]);
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
        $content = $request->only('content');
        $result  = Comment::where('id', $id)->update($content);

        return response()->json($result);
    }

    /**
     * 删除
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = Comment::destroy($id);

        return response()->json($result);
    }
}
