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
    {{--css文件--}}
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
    @yield('css')
    <!-- Scripts -->
    <script>
        window.Language = 'zh_cn';
        window.Laravel = {"csrfToken":"{{csrf_token()}}"}
    </script>
</head>
<body>
<div id="app">
    {{--导航栏--}}
    @include('navbar')

    <div class="main">

        @yield('content')

    </div>

    {{--页脚--}}
    @include('footer')
</div>

<!-- Scripts -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/home.js"></script>

{{--js文件--}}
@yield('js')

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
