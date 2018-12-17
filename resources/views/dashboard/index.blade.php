<html lang="zh" class="">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>PJ Blog Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/base.css') }}">

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "{{csrf_token()}}"
        }
        window.user = {!! Auth()->user() !!};
        window.Language = "en"
    </script>

</head>
<body style="padding-right: 0px;">

<div id="app">
    <router-view></router-view>
</div>

<script src="{{mix('js/base.js')}}"></script>

<script>

</script>
</body>
</html>