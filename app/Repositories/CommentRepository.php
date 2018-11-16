<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository
{
    use BaseRepository;

    protected $mode;

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    /**
     * Get number of the records.
     *
     * @param  Request $request
     * @param  integer $number
     * @param  string  $sort
     * @param  string  $sortColumn
     * @return collection
     */
    public function pageWithRequest($request, $number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $keyword = $request->get('keyword');

        return $this->model->when($keyword, function ($query) use ($keyword) {
            $query->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%");
            });
        })
            ->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * 按类型和被评论主题的ID获取评论
     *
     * @param $commentableId
     * @param $commentableType
     * @return mixed
     */
    public function getByCommentable($commentableId, $commentableType)
    {
        return $this->model
                    ->where('commentable_id', $commentableId)
                    ->where('commentable_type', $commentableType)
                    ->get();
    }

    public function getParentComments($commentableId, $commentableType)
    {
        return $this->model
                    ->where('commentable_id', $commentableId)
                    ->where('commentable_type', $commentableType)
                    ->whereNull('to_user')
                    ->get();
    }

    public function getChildComments($commentableId, $commentableType, $path)
    {
        return $this->model
                    ->where('commentable_id', $commentableId)
                    ->where('commentable_type', $commentableType)
                    ->whereNotNull('to_user')
                    ->where('path', 'like', "{$path}%")
                    ->get();
    }

    /**
     * Toogle up vote and down vote by user.
     *
     * @param  int $id
     * @param  boolean $isUpVote
     *
     * @return boolean
     */
    public function toggleVote($id, $isUpVote = true)
    {
        $user = \auth()->user();

        $comment = $this->getById($id);

        if($comment == null) {
            return false;
        }

        return $isUpVote
            ? $this->upOrDownVote($user, $comment)
            : $this->upOrDownVote($user, $comment, 'down');
    }

    /**
     * Up vote or down vote item.
     *
     * @param  \App\User $user
     * @param  \Illuminate\Database\Eloquent\Model $target
     * @param  string $type
     *
     * @return boolean
     */
    public function upOrDownVote($user, $target, $type = 'up')
    {
        $hasVoted = $user->{'has' . ucfirst($type) . 'Voted'}($target);

        if($hasVoted) {
            $user->cancelVote($target);
            return false;
        }

        if ($type == 'up') {
//            $target->user->notify(new GotVote($type . '_vote', $user, $target));
        }

        $user->{$type . 'Vote'}($target);

        return true;
    }
}