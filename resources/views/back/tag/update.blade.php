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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
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
                        <small class="float-right"><a href="/admin/tags/" class="btn btn-sm btn-secondary">Back</a> </small>
                        <h5>Update Tag</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form role="form" class="col-md-4 offset-md-4" action="/admin/tags/update/{{$tag->id}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input type="text" id="tag" placeholder="Tag" name="tag" value="{{$tag->tag}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" placeholder="Title" name="title" value="{{$tag->title}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" placeholder="Meta Description" class="form-control">{{$tag->meta_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Update</button>
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
    $('form').on('submit', function (e) {
        e.preventDefault();
        self = $(this);
        $.post(self.attr('action'), self.serialize(), function (res) {
            toastr.info('更新成功');
            window.setTimeout(function(){
                window.location.href = '/tags';
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