
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
    <style>
        .personal-info li {
            float: left;
            list-style: none;
            margin-right: 10px;
            margin-bottom: 20px;
            height: 43px;
            border: 1px solid #ECF0F1;
            overflow: hidden;
        }
        .personal-info li em {
            padding: 0 15px;
            line-height: 43px;
            font-size: 16px;
            color: #9b9b9b;
            font-weight: 400;
            font-style: normal;
        }
        .personal-info li span {
            padding: 15px;
            line-height: 42px;
            color: #34495E;
            font-weight: 400;
            background: #ECF0F1;
            border-left: 1px solid #ECF0F1;
        }
        .head-img {
            max-height: none!important;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 50%;
            background: #FFF;
            -webkit-transition: -webkit-transform 600ms;
            -moz-transition: -moz-transform 600ms;
            transition: transform 600ms;
        }
        .head-img:hover {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
<div id="app">
   @include('navbar')
    <div class="main">
        <div class="container-fluid">
            <div class="jumbotron text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>关于我</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="user text-center" style="margin-bottom: 20px;">
                <img src="/img/log.jpg" class="avatar img-circle head-img">
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Who am I?
                        </div>
                        <div class="panel-body personal-info">
                            <ul class="list-unstyled">
                                <li>
                                    <em>Name</em>
                                    <span>杨骑铭（QiMing Yang）</span>
                                </li>
                                <li>
                                    <em>Gender</em>
                                    <span>男</span>
                                </li>
                                <li>
                                    <em>Age</em>
                                    <span>94 后</span>
                                </li>
                                <li>
                                    <em>Email</em>
                                    <span>1443261811@QQ.com</span>
                                </li>
                                <li>
                                    <em>Website</em>
                                    <span><a target="_blank" href="https://pigjian.com">https://pigjian.com</a></span>
                                </li>
                                <li>
                                    <em>Github</em>
                                    <span><a target="_blank" href="https://github.com/yang1443261811"><i class="ion-social-github"></i></a></span>
                                </li>
                                <li>
                                    <em>Wechat</em>
                                    <span>yang1443261811</span>
                                </li>
                                <li>
                                    <em>QQ</em>
                                    <span>1443261811</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</div>
<!-- Scripts -->
<script src="/js/jquery-2.2.4.min.js"></script>
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
