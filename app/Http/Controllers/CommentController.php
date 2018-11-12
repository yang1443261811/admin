<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use App\Comment;
use App\User;

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
     * @return response
     */
    public function create(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = \Auth()->id();

        $comment = $this->comment->store($input);
        $path = $comment->id . '/';

        if ($request->has('comment_id')) {
            $parent = $comment::find($input['comment_id']);
            $path = sprintf('%s%s/', $parent->path, $comment->id);
        }

        $comment->where('id', $comment->id)->update(['path' => $path]);

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
     * @param $id
     * @return response
     */
    public function show(Request $request, $id)
    {
        $type = $request->input('type');

        $comments = $this->comment->getParentComments($id, $type);

        $this->prepareData($comments, $id, $type);

        return $this->response->collection($comments);
    }

    /**
     * 获取子评论
     *
     * @param mixed  $data 顶级评论
     * @param int    $id   文章ID
     * @param string $type 评论类型
     * @return mixed
     */
    public function prepareData($data, $id, $type)
    {
        if ($data->isEmpty()) {
            return $data;
        }
        foreach ($data as &$item) {
            $child = $this->comment->getChildComments($id, $type, $item['path']);
            $node = array();
            foreach ($child as $k => $row) {
                $reply = User::find($row->to_uid);
                $node[$k] = array(
                    'id'          => $row->id,
                    'path'        => $row->path,
                    'user_id'     => $row->user_id,
                    'content'     => $row->content,
                    'reply_name'  => $reply['name'],
                    'reply_avatar'=> $reply['avatar'],
                    'username'    => $row->user->name,
                    'avatar'      => $row->user->avatar,
                    'created'     => $row->created_at->diffForHumans(),
                );
            }

            $item['child'] = $node;
         }
    }

    public function test()
    {
        $comments = $this->comment->getParentComments(49, 'App\Article');
        $this->prepareData($comments, 49, 'App\Article');
        p($comments);
    }

}