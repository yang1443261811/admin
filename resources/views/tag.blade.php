@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>{{$tag->tag}}</h3>
                    <h6>标签下所有文章和讨论</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">文章 ( {{$articles->count()}} )</div>
                    <ul class="list-group">
                        @if(!empty($articles))
                            @foreach($articles as $item)
                                <li class="list-group-item">
                                    <span class="badge">{{$item->view_count}}</span>
                                    <a href="/post/show/{{$item->id}}">{{$item->title}}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">讨论 ( {{$discussions->count()}} )</div>
                    <ul class="list-group">
                        @foreach($discussions as $discussion)
                            <li class="list-group-item">
                                <span class="badge">{{$discussion->view_count}}</span>
                                <a href="/discussion/show/{{$discussion->id}}">{{$discussion->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
