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
            <div class="row">
                <div class="ibox">
                    <div class="ibox-title">
                        <small class="float-right"><a href="/dashboard/users/" class="btn btn-sm btn-secondary">Back</a> </small>
                        <h5>Create User</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form role="form" class="form col-md-4 offset-md-4">
                                <div class="form-group text-center">
                                    <img src="/images/default.png" id="avatar" width="100" class="rounded-circle" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" id="name" placeholder="Username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="nickname">Nick Name</label>
                                    <input type="text" id="nickname" placeholder="Nick Name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" id="website" placeholder="Website" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" id="description" placeholder="Description" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" placeholder="Password" name="password" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
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