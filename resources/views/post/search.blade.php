@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>{{$keyword}}</h3>
                    <h6>https://pigjian.com</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container list">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if($articles->count() > 0)
                    @foreach($articles as $item)
                        <div class="media">
                            <a class="media-left" href="/post/show/{{$item->id}}">
                                <img alt="redis-five-kinds-of-structure-and-order" src="{{$item->page_image}}" style="height:140px;" data-holder-rendered="true">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading">
                                    <a href="/post/show/{{$item->id}}">{{$item->title}}</a>
                                </h6>
                                <div class="meta">
                                    <span class="cinema">{{$item->subtitle}}</span>
                                </div>
                                <div class="description">
                                    {{$item->meta_description}}
                                </div>
                                <div class="extra">
                                    @if(!empty($item->tags))
                                        @foreach($item->tags as $tag)
                                            <a href="/tag/{{$tag->tag}}">
                                                <div class="label"><i class="ion-pricetag"></i>{{$tag->tag}}</div>
                                            </a>
                                        @endforeach
                                    @endif
                                    <div class="info">
                                        <i class="ion-person"></i>小贱贱&nbsp;,&nbsp;
                                        <i class="ion-clock"></i>{{$item->created_at}}&nbsp;,&nbsp;
                                        <i class="ion-ios-eye"></i>{{$item->view_count}}
                                        <a href="/post/show/{{$item->id}}" class="pull-right">
                                            Read More <i class="ion-ios-arrow-forward"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="text-center">
        @if($articles->count() > 0)
            <div class="pagination pagination-minimal">
                {{ $articles->links('vendor.pagination.new') }}
            </div>
        @else
            <h3 class="text-center">Nothing in here...</h3>
        @endif
    </div>
@endsection

