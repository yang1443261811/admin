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
        [v-cloak] { display: none; }
    </style>
    <script>
        window.Laravel = {
            csrfToken: "sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"
        }
        window.Language = "en"
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
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
            <div class="row">
                <div class="ibox">
                    <div class="ibox-title">
                        <small class="float-right"><a href="/admin/categories/" class="btn btn-sm btn-secondary">Back</a></small>
                        <h5>Create Category</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form class="col-sm-6 offset-sm-2" action="/admin/categories/store">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="path" class="col-sm-3 col-form-label">Path</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="path" id="path" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="editor" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description" placeholder="Please input category's description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-9">
                                        <button type="submit" class="btn btn-info">Create</button>
                                    </div>
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
    //ajax提交表单数据
    $('form').on('submit', function (e) {
        e.preventDefault();
        self = $(this);
        $.post(self.attr('action'), self.serialize(), function (res) {
            toastr.info('添加成功');
            window.setTimeout(function(){
                window.location.href = '/admin/categories';
            }, 1500);
        }).complete(function (res) {
            if (res.status != 200) {
                $.each(res.responseJSON.errors, function (key, value) {
                    toastr.warning(value[0]);
                    return false;
                });
            }
        });
    })
</script>
</body>
</html>