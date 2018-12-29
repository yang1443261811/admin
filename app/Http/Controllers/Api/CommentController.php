<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use Illuminate\Http\Request;
use App\Repositories\CommentRepository;

class CommentController extends ApiController
{
    protected $comment;

    public function __construct(CommentRepository $comment)
    {
        parent::__construct();

        $this->comment = $comment;
    }

    /**
     * 分页获取评论
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList(Request $request)
    {
        return $this->response->collection(
            $this->comment->pageWithRequest($request)
        );
    }

    /**
     * 添加评论
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $input = array_merge($request->all(), [
           'user_id'   => \Auth()->id(),
           'from_user' => \Auth()->user()->name,
        ]);

        $comment = $this->comment->store($input);
        $path = $comment->id . '/';

        if ($request->has('comment_id')) {
            $parent = $comment::find($input['comment_id']);
            $path = sprintf('%s%s/', $parent->path, $comment->id);
        }

        $this->comment->update($comment->id, ['path' => $path]);

        return $this->response->item($comment);
    }

    /**
     * post up vote the comment by user.
     *
     * @param Request $request
     * @param string $type
     *
     * @return mixed
     */
    public function postVoteComment(Request $request, $type)
    {
        $this->validate($request, ['id' => 'required|exists:comments,id']);

        ($type == 'up')
            ? $this->comment->toggleVote($request->id)
            : $this->comment->toggleVote($request->id, false);

        return response()->json(true);
    }

    /**
     * 获取文章的所有评论
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        $type = $request->input('type');

        $comments = $this->comment->getParentComments($id, $type);

        foreach ($comments as &$item) {
            $item['child'] = $this->comment->getChildComments($id, $type, $item['path'])->toArray();
        }

        return $this->response->collection($comments);
    }

    /**
     * 删除评论
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $result = Comment::destroy($id);

        return response()->json($result);
    }

    /**
     * 编辑
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        return $this->response->item(
            $this->comment->getById($id)
        );
    }

    /**
     * 更新
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->comment->update($id, $request->all());

        return response()->json(true);
    }

}