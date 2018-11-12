
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
                    <div class="well bs-component">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend class="text-center">注册</legend>

                                <div class="form-group {{$errors->has('name') ? 'has-error' : null}}">
                                    <div class="col-md-10 col-md-offset-1">
                                        <label for="name" class="control-label">用户名</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="请输入用户名" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group" {{$errors->has('email') ? 'has-error' : null}}>
                                    <div class="col-md-10 col-md-offset-1">
                                        <label for="email" class="control-label">邮箱地址</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="请输入邮箱" required>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group" {{$errors->has('password') ? 'has-error' : null}}>
                                    <div class="col-md-10 col-md-offset-1">
                                        <label for="password" class="control-label">密码</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="请输入密码" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group" {{$errors->has('password-confirm') ? 'has-error' : null}}>
                                    <div class="col-md-10 col-md-offset-1">
                                        <label for="password-confirm" class="control-label">确认密码</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="请输入确认密码" required>
                                        @if ($errors->has('password-confirm'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <button type="submit" class="btn btn-primary form-control">
                                            注册
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <a class="btn btn-link" href="/login">
                                            您已经有账号？点击此处
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
