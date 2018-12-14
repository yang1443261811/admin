<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
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
        $this->validate($request, [
            'id' => 'required|exists:comments,id',
        ]);

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

}