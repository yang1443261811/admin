@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h4>{{$discussion->title}}</h4>

                    <span><i class="ion-person" style="margin-right: 10px"></i>{{$discussion->user->nickname}}</span><br/>
                </div>
            </div>
        </div>
    </div>
    <div class="discuss-show container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="media">
                    <div class="media-body box-body">
                        <div class="heading">
                            <i class="ion-clock"></i>发表时间 : {{$discussion->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="ion-chatbubble-working"></i>回复数 : 1
                        </div>
                        <div class="discuss-body">
                            <parse>{{$discussion->content}}</parse>
                        </div>
                        <div class="footing"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <comment username="{{$discussion->user->nickname}}"
             user-avatar="{{$discussion->avatar}}"
             commentable-type="discussions"
             commentable-id="{{$discussion->id}}"
             null-text=""
             can-comment>
    </comment>

    <div class="container">
        <div class="row comment">
            <div class="col-md-8 col-md-offset-2">
                <h5></h5>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="media">
                    <div class="media-left">
                        <a href="/user/Jiajian">
                            <img src="https://pig-storage.b0.upaiyun.com/avatar/2017/05/16/s1ovquiAPBXDpjLEF7XzXF7Y1Cy6YI88nRotOQVa.png" class="media-object img-circle">
                        </a>
                    </div>
                    <div class="media-body box-body">
                        <div class="heading">
                            <i class="ion-person"></i>
                            <a href="/user/Jiajian">Jiajian</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="ion-clock"></i>4个月前
                            <span class="pull-right operate">
                                    <span class="vote-button">
                                        <a href="javascript:;"><i class="ion-happy-outline"></i></a>
                                        <a href="javascript:;"><i class="ion-sad-outline"></i></a>
                                    </span>
                                    <a href="javascript:;"><i class="ion-ios-undo"></i></a>
                                </span>
                        </div>
                        <div class="comment-body markdown">
                            <p>代码高亮是用
                                <a href="https://highlightjs.org/">highlight.js</a> ，然后样式自行调。
                            </p>
                        </div>
                    </div>
                </div>
                @if(\Auth()->check())
                    <form class="form-horizontal" style="margin-top: 30px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label own-avatar">
                                <a href="/user/center/{{\Auth()->id()}}"><img src="{{$discussion->user->avatar ?: '/images/default.png'}}" class="img-circle"></a>
                            </label> <div class="col-sm-10">
                                <div data-v-49ec89dc="" class="complete-box" id="content">
                                    <textarea data-v-49ec89dc="" id="v-textcomplete-zgm95aha" placeholder="Markdown" rows="7" name="textcomplete" class="form-control" style="line-height: 20px;">

                                    </textarea>
                                    <div data-v-49ec89dc="" id="autocomplete-zgm95aha" class="autocomplete transition" style="display: none;">
                                        <ul data-v-49ec89dc=""></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success pull-right">发布评论</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection

