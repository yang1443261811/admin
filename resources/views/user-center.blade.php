
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

    <title>PJ Blog</title>

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
    </div>
    @include('footer')
</div>

<!-- Scripts -->
<script src="/js/home.7bc569eaa262b6a3caa5.js"></script>
<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>

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
