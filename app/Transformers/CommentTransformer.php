<?php

namespace App\Transformers;

use App\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{
    protected $availableIncludes = [ 'user' ];

    public function transform(Comment $comment)
    {
        return [
            'id'            => $comment->id,
            'user_id'       => $comment->user_id,
            'child'         => $comment->child,
            'from_user'     => $comment->from_user,
            'avatar'        => isset($comment->user) ? $comment->user->avatar : config('blog.default_avatar'),
            'commentable'   => isset($comment->commentable) ? $comment->commentable->title : 'Be Forbidden!',
            'type'          => $comment->commentable_type,
            'content_raw'   => $comment->content,
            'created_at'    => $comment->created_at,
            'is_voted'      => \Auth()->id() ? $comment->isVotedBy(\Auth()->id()) : false,
            'is_up_voted'   => \Auth()->id() ? \Auth()->user()->hasUpVoted($comment) : false,
            'is_down_voted' => \Auth()->id() ? \Auth()->user()->hasDownVoted($comment) : false,
            'vote_count'    => $comment->countUpVoters(),
        ];
    }

    /**
     * Include User
     *
     * @param Comment $comment
     * @return \League\Fractal\Resource\Collection
     */
    public function includeUser(Comment $comment)
    {
        if ($user = $comment->user) {
            return $this->item($user, new UserTransformer);
        }
    }

}
