@extends('layouts.app')

@section('css')
    <style>
        .pagination{padding: 0;line-height:0}
        .pagination ul li a{height:100%;margin-bottom:10px;}
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4>问题讨论</h4>

                    <h6>欢迎，提出各种问题</h6>

                    <a href="/discussion/create" class="btn btn-info btn-sm"><i class="ion-edit"></i> 提出问题</a>
                </div>
            </div>
        </div>
    </div>
    <div class="discussion container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($discussions as $item)
                    <div class="media">
                        <div class="media-left">
                            <a href="/discussion/show/{{$item->id}}">
                                <img class="avatar media-object img-circle" src="{{\Auth()->check() && !empty($item->user->avatar) ? $item->user->avatar : '/images/default.png'}}">
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">
                                <a href="/discussion/show/{{$item->id}}">
                                    {{$item->title}}
                                </a>
                            </h6>
                            <div class="media-conversation-meta">
                                <div class="media-conversation-replies">
                                    <a href="/discussion/show/{{$item->id}}">0</a>回复
                                </div>
                            </div>
                            {{empty($item->user) ? '--' : $item->user->nickname}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        @if(!empty($discussions))
            <div class="pagination pagination-minimal">
                {{ $discussions->links('vendor.pagination.new') }}
            </div>
        @else
            <h3 class="text-center">Nothing in here...</h3>
        @endif
    </div>
@endsection

