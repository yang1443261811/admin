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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
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
                        <small class="float-right"><a href="/users" class="btn btn-sm btn-secondary">Back</a> </small>
                        <h5>Edit User</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form role="form" class="form col-md-4 offset-md-4" action="/users/update/{{$user->id}}">
                                {{csrf_field()}}
                                <div class="form-group text-center">
                                    <img src="{{empty($user->avatar) ? '/images/default.png' : $user->avatar}}" id="avatar" width="100" class="rounded-circle" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" id="name" name='name' value="{{$user->name}}" placeholder="Username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{$user->email}}" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="nickname">Nick Name</label>
                                    <input type="text" name="nickname" id="nickname" value="{{$user->nickname}}" placeholder="Nick Name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" id="website" value="{{$user->website}}" placeholder="Website" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" value="{{$user->description}}" placeholder="Description" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="/js/common.js"></script>
<script>
    //ajax 提交表单数据
    $('form').on('submit', function (e) {
        e.preventDefault();
        var self = $(this);
        $.post(self.attr('action'), self.serialize(), function (res) {
            console.log(res);
            if (res) {
                toastr.info('修改成功');
                window.setTimeout(function(){
                    window.location.href = '/users';
                }, 1500);
            } else {
                toastr.warning('删除失败');
            }
        })
    })
</script>
</body>
</html>