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
        window.Laravel = {"csrfToken":"{{csrf_token()}}"}
    </script>
</head>
<body>
<div id="app">
  @include('navbar')
    <div class="main">
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
