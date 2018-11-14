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
                                <a href="https://pigjian.com/user/yqm/discussions" class="counter">0</a>
                                <a href="https://pigjian.com/user/yqm/discussions" class="text">讨论数</a>
                            </div>
                            <div class="col-xs-4">
                                <a href="https://pigjian.com/user/yqm/comments" class="counter">0</a>
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
                        <li class="nothing">Nothing in here...</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">最近的评论</div>

                    <ul class="list-group">
                        <li class="nothing">Nothing in here...</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
