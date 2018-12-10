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
    <link rel="shortcut icon" href="/images/favicon.ico" />
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
    @include('layouts.navbar')

    <div class="main">

        @yield('content')

    </div>

    {{--页脚--}}
    @include('layouts.footer')
</div>

<!-- Scripts -->
<script src="{{ mix('js/home.js') }}"></script>

{{--js文件--}}
@yield('js')

<script>

</script>
</body>
</html>
