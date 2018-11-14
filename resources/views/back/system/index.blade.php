<html lang="zh" class="">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"/>
    <title>PJ Blog Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link rel="stylesheet" href="/css/app.css?id=8f841e10d99c3fdf0293"/>
    <link rel="stylesheet" href="/css/common.css?id=8f841e10d99c3fdf0293"/>
    <style>
        [v-cloak] {
            display: none;
        }
        .server-info {
            display: none;
        }
    </style>
    <script>
        window.Laravel = {
            csrfToken: "sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"
        }
        window.Language = "en"
    </script>
</head>
<body class="" style="padding-right: 0px;">
<div id="wrapper" class="">
    {{--侧栏--}}
    @include('back.common.sidebar')
    <div id="page-content-wrapper">
        <nav class="navbar navbar bg-white">
            <div class="navbar-brand">
                <a class="navbar-toggler text-left"><i class="fas fa-bars text-secondary"></i></a>
            </div>
        </nav>
        <div class="container-fluid">
            <div data-v-8c9bafac="" class="row">
                <div data-v-8c9bafac="" class="ibox">
                    <div data-v-8c9bafac="" class="ibox-title">
                        <h5 data-v-8c9bafac="">Systems</h5>
                    </div>
                    <div data-v-8c9bafac="" class="ibox-content">
                        <div data-v-8c9bafac="" class="row">
                            <div data-v-8c9bafac="" class="col-md-2">
                                <div data-v-8c9bafac="" class="sidebar">
                                    <ul data-v-8c9bafac="" class="toggle">
                                        <li data-v-8c9bafac="" aria-expanded="false" class="active">
                                            <a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-puzzle-piece"></i>System</a>
                                        </li>
                                        <li data-v-8c9bafac="" aria-expanded="true" class="">
                                            <a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-code"></i> PHP</a>
                                        </li>
                                        <li data-v-8c9bafac="" aria-expanded="false" class="">
                                            <a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-database"></i>
                                                Database</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul data-v-8c9bafac="" id="tab-content" class="col-md-10 server-info" style="display: block">
                                <li data-v-8c9bafac="" aria-hidden="true"><h2 data-v-8c9bafac="">System</h2>
                                    <table data-v-8c9bafac="" class="table table-hover">
                                        <thead data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <th data-v-8c9bafac="" width="150">Setting</th>
                                            <th data-v-8c9bafac="">Value</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Web Server</td>
                                            <td data-v-8c9bafac="">{{$server}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Domain</td>
                                            <td data-v-8c9bafac="">{{$http_host}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">IP</td>
                                            <td data-v-8c9bafac="">{{$remote_host}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">User Agent</td>
                                            <td data-v-8c9bafac="">{{$user_agent}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                            <ul data-v-8c9bafac="" id="tab-content" class="col-md-10 server-info">
                                <li data-v-8c9bafac="" aria-hidden="false"><h2 data-v-8c9bafac="">PHP</h2>
                                    <table data-v-8c9bafac="" class="table table-hover">
                                        <thead data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <th data-v-8c9bafac="" width="150">Setting</th>
                                            <th data-v-8c9bafac="">Value</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Version</td>
                                            <td data-v-8c9bafac="">{{$php}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Handler</td>
                                            <td data-v-8c9bafac="">{{$sapi_name}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Extension</td>
                                            <td data-v-8c9bafac="">{{$extensions}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                            <ul data-v-8c9bafac="" id="tab-content" class="col-md-10 server-info">
                                <li data-v-8c9bafac="" aria-hidden="true"><h2 data-v-8c9bafac="">Database</h2>
                                    <table data-v-8c9bafac="" class="table table-hover">
                                        <thead data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <th data-v-8c9bafac="" width="150">Setting</th>
                                            <th data-v-8c9bafac="">Value</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-8c9bafac="">
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Driver</td>
                                            <td data-v-8c9bafac="">{{$db_connection}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Database</td>
                                            <td data-v-8c9bafac="">{{$db_database}}</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Version</td>
                                            <td data-v-8c9bafac="">{{$db_version}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/common.js"></script>
<script>
    $('.toggle li').click(function () {
        $('.toggle li').removeClass('active');
        $(this).addClass('active');
        $('.server-info').css('display', 'none');
        var index = $(this).index();
        $('.server-info').eq(index).css('display', 'block');
    });
</script>
</body>
</html>