<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Repositories\CommentRepository;

class CommentsController extends Controller
{
    protected $comment;

    public function __construct(CommentRepository $comment)
    {
        $this->comment = $comment;
    }

    /**
     * 首页
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $comments = $this->comment->pageWithRequest($request);

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
        $this->comment->update($id, $request->only('content'));

        return response()->json(true);
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
