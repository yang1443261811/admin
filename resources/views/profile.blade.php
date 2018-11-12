
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

    <link rel="shortcut icon" href="/image/io.jpg">

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
        <div class="container profile">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <avatar src="{{(\Auth::user())->avatar}}"></avatar>
                </div>
                <div class="col-md-7">
                    <form action="/user/profile" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <label for="Name" class="col-md-3 control-label">用户名</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Name" value="{{$name}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="col-md-3 control-label">邮箱地址</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Email" value="{{$email}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Nickname" class="col-md-3 control-label">昵称</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Nickname" name="nickname" value="{{$nickname}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Website" class="col-md-3 control-label">网站</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Website" name="website" value="{{$website}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Weibo" class="col-md-3 control-label">微博名</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Weibo" name="weibo_name" value="{{$weibo_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Weibo" class="col-md-3 control-label">微博主页</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="Weibo" name="weibo_link" value="{{$weibo_link}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="GitHub" class="col-md-3 control-label">GitHub</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="GitHub" name="github_url" value="{{$github_url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Description" class="col-md-3 control-label">个人简叙</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" name="description" id="Description">{{$description}}</textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-action row">
                                <div class="col-md-offset-3 col-md-9 col-xs-12">
                                    <button class="btn btn-success btn-block" type="submit">更新资料</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
