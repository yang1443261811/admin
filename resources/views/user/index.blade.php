@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="user jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <img class="avatar img-circle" src="{{$user->avatar}}">
                    </div>
                    <div class="col-sm-5 content">
                        <div class="header">{{$user->name}}</div>
                        <div class="description">
                            Nothing in here...
                        </div>
                        <div class="actions">
                            <a href="/user/profile" class="btn btn-success btn-sm">编辑资料</a>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                    <div class="col-sm-5 user-follow">
                        <div class="row">
                            <div class="col-xs-4">
                                <a href="https://pigjian.com/user/yqm/following" class="counter">0</a>
                                <a href="https://pigjian.com/user/yqm/following" class="text">关注数</a>
                            </div>
                            <div class="col-xs-4">
                                <a href="https://pigjian.com/user/yqm/discussions" class="counter">{{$user->discussions->count()}}</a>
                                <a href="https://pigjian.com/user/yqm/discussions" class="text">讨论数</a>
                            </div>
                            <div class="col-xs-4">
                                <a href="https://pigjian.com/user/yqm/comments" class="counter">{{$user->comments->count()}}</a>
                                <a href="https://pigjian.com/user/yqm/comments" class="text">评论数</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">最近的讨论</div>

                    <ul class="list-group">
                        @if($discussions->isEmpty())
                            <li class="nothing">Nothing in here...</li>
                        @else
                            @foreach($discussions as $discussion)
                                <li class="list-group-item">
                                    <a href="/discussion/show/{{$discussion->id}}">{{$discussion->title}}</a>
                                    <span class="meta">in <span class="timeago">{{$discussion->created_at->diffForHumans()}}</span></span>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">最近的评论</div>
                    <ul class="list-group">
                        @if($comments->isEmpty())
                            <li class="nothing">Nothing in here...</li>
                        @else

                            @foreach($comments as $comment)
                                <li class="list-group-item">

                                    @if($comment->commentable_type == 'App\Article')
                                        <a href="/post/show/{{$comment->commentable_id}}">{{$comment->commentable->title}}</a>
                                    @else
                                        <a href="/discussion/show/{{$comment->commentable_id}}">{{$comment->commentable->title}}</a>
                                    @endif

                                    <span class="meta">in <span class="timeago">{{$comment->created_at}}</span></span>
                                    <div class="markdown"><p>{{$comment->content}}</p></div>
                                </li>
                            @endforeach

                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
