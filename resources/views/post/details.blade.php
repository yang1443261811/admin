@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/css/codeStyles/darkula.css"/>
    <style>
        pre {
            padding: 0;
        }

        .reply {
            font-size: 14px;
            display: inline-block;
            margin-bottom: 2px;
            cursor: pointer
        }

        .editor {
            width: 100%;
            padding: 10px 20px;
            background: #ECF0F1;
            display: none;
        }

        .editor input {
            width: 90%;
            height: 40px;
            text-indent: 10px;
            cursor: auto;
            overflow: hidden auto;
            border: 2px solid #d6dffa;
        }

        .created {
            font-size: 10px;
            color: #7F8C8D;
            text-align: right;
            margin: 0 !important;
        }

        .comment-body ul li {
            border-bottom: 1px solid #eee;
        }

        .comment-body ul li a {
            font-size: 14px;
        }

        .comment-body ul li span {
            cursor: pointer;
        }

        .edit {
            margin-top: 0 !important;
            margin-bottom: 10px;
        }

        .edit input {
            width: 90%;
            height: 40px;
            text-indent: 10px;
            cursor: auto;
            overflow: hidden auto;
            border: 2px solid #d6dffa;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4>{{$articles->title}}</h4>
                    <h6>{{$articles->subtitle}}</h6>
                    <div class="header">
                        <i class="ion-person"></i>Yang，
                        <i class="ion-pricetag"></i>
                        @if($articles->tags)
                            @foreach($articles->tags as $tag)
                                <a href="/tag/{{$tag->tag}}">{{$tag->tag}}</a>，
                            @endforeach
                        @endif
                        <i class="ion-clock"></i>{{$articles->created_at}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <parse content="{!! $articles->content['raw'] !!}"></parse>
                {{--<parse content="{{ $articles->content['raw'] }}"></parse>--}}
                {{--<div>{!! $articles->content['raw'] !!}</div>--}}
                <div class="publishing alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    由 <a xmlns:cc="http://creativecommons.org/ns#" href="https://pigjian.com" property="cc:attributionName" rel="cc:attributionURL">Yang</a> 创作，采用
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">知识共享署名-非商业性使用 4.0 国际 许可协议</a>进行许可。<br/>基于
                    <a xmlns:dct="http://purl.org/dc/terms/" href="https://pigjian.com" rel="dct:source">https://pigjian.com</a>上的作品创作。
                </div>
                <div class="footing">
                    <div class="social-share"></div>
                </div>
            </div>
        </div>
    </div>
    @if(\Auth()->check())
        <comment
                title="评论"
                commentable_type="App\Article"
                commentable_id="{{$articles->id}}"
                username="{{Auth()->user()->name}}"
                avatar="{{Auth()->user()->avatar}}"
        ></comment>
    @endif

@endsection

@section('js')
    <script src="/js/highlight.pack.js"></script>
    <script src="/js/layer/layer.js"></script>
    {{--<script src="/js/detials.js"></script>--}}
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection
