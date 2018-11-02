<html lang="zh" class="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB" />
    <title>PJ Blog Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/css/app.css?id=8f841e10d99c3fdf0293" />
    <link rel="stylesheet" href="/css/common.css?id=8f841e10d99c3fdf0293" />
    <style>
        [v-cloak] {
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
    @include('common.sidebar')
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
                                    <ul data-v-8c9bafac="">
                                        <li data-v-8c9bafac="" aria-expanded="false" class="active"><a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-puzzle-piece"></i>System</a> </li>
                                        <li data-v-8c9bafac="" aria-expanded="true" class=""><a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-code"></i> PHP</a></li>
                                        <li data-v-8c9bafac="" aria-expanded="false" class=""><a data-v-8c9bafac=""><i data-v-8c9bafac="" class="fas fa-database"></i> Database</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <ul data-v-8c9bafac="" id="tab-content" class="col-md-10">
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
                                            <td data-v-8c9bafac="">Apache/2.4.23 (Win32) OpenSSL/1.0.2j mod_fcgid/2.3.9 </td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">Domain</td>
                                            <td data-v-8c9bafac="">blog2</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">IP</td>
                                            <td data-v-8c9bafac="">127.0.0.1</td>
                                        </tr>
                                        <tr data-v-8c9bafac="">
                                            <td data-v-8c9bafac="">User Agent</td>
                                            <td data-v-8c9bafac="">Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.89 Safari/537.36 </td>
                                        </tr>
                                        </tbody>
                                    </table> </li>
                                <!---->
                                <!---->
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
</body>
</html>