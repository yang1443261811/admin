
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

    <link rel="shortcut icon" href="/images/favicon.ico">

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
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
                    <div class="well bs-component">
                        <form class="form-horizontal" role="form" method="POST" action="/login">
                            {{csrf_field()}}
                            <fieldset>
                                <legend class="text-center">登录</legend>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label class="control-label" for="email">邮箱地址</label>
                                        <input id="email" type="email" class="form-control" name="email" value="" placeholder="请输入邮箱" required autofocus>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label class="control-label" for="password">密码</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="请输入密码" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-1">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <button type="submit" class="btn btn-success form-control">
                                            登录
                                        </button>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <div class="strike">
                                        <span>or</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <a href="https://pigjian.com/auth/github" class="btn btn-primary form-control">
                                            <i class="ion-social-github"></i> 登录 Github
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            忘记密码？
                                        </a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
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
