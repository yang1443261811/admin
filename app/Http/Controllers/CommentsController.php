<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')
            ->paginate(20);
        return view('comment.index', compact('comments'));
    }

    public function edit($id)
    {
        return view('comment.update', ['comment' => Comment::find($id)]);
    }

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
