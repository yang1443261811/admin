
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="PJ Blog,blog,pigjian,laravel,vuejs">
    <meta name="description" content="Nothing is impossible in PJ Blog">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="/img/io.jpg">
    <title>Yang Blog</title>
    <link rel="stylesheet" href="/css/home.css">
    <!-- Scripts -->
    <script>
        window.Language = 'zh_cn';
        window.Laravel = {"csrfToken":"{{csrf_token()}}"}    </script>
</head>
<body>
<div id="app">
    @include('navbar')
    <div class="main">
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
    </div>
    @include('footer')
</div>

<!-- Scripts -->
<script src="/js/home.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81634754-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
