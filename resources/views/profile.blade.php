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
    <link  href="/css/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/sweetalert2.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
    <style>

    </style>
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
                    <div data-v-2b878978="" class="cover-avatar text-center">
                        <img data-v-2b878978="" src="{{(\Auth::user())->avatar}}" class="avatar">
                        <a data-v-2b878978="" href="javascript:;" class="btn btn-success file" style="position: relative; cursor: pointer">
                            <span data-v-2b878978="" data-toggle="tooltip" style=" cursor: pointer">修改头像</span>
                            <input data-v-8181b19c="" type="file" id="fileupload" data-url="/files/upload" accept="image/png,image/gif,image/jpeg,image/jpg,image/tiff" name="image" multiple />
                        </a>
                    </div>
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
{{--<script src="/js/home.7bc569eaa262b6a3caa5.js"></script>--}}
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/home.js"></script>
<script src="/js/cropper.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="/js/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script src="/js/jquery.fileupload-process.js"></script>
<script src="/js/jquery.fileupload-validate.js"></script>

<script>
    $(function () {
        //初始化图片剪切插件cropper
        $('#image').cropper({
            aspectRatio: 16 / 9,
            viewMode:1,
            crop: function (e) {
                console.log(e);
            }
        });

        //配置sweetalert2插件
        var config = {
            title: '<div><h4>Crop Avatar</h4></div>',
            html:'<img src="" id="image" style="width: 100%;">',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i>Ok',
            cancelButtonText: '<i class="fa fa-thumbs-down"></i> Cancel'
        };

        //图片上传插件初始化
        $('#fileupload').fileupload({
            dataType: 'json',
            maxFileSize: 2000000,//文件不超过2M
            acceptFileTypes:  /(\.|\/)(gif|jpe?g|png)$/i,//文件格式限制
            messages:{
                maxFileSize: '图片太大',
                acceptFileTypes: '只能上传图片'
            },
            processfail:function (e, data) {
                var currentFile = data.files[data.index];
                if (data.files.error && currentFile.error) {
                    // there was an error, do something about it
                    toastr.warning(currentFile.error);
                }
            },
            done: function (e, res) {
                swal(config).then(function(isConfirm){
                    if (isConfirm.value) {
                        var data = $('#image').cropper('getData');
                        var image = res.result;
                        $.post('/user/cropAvatar', {data:data, image:image, _token:'{{csrf_token()}}'}, function (response) {
                            console.log(response);
                            window.location.reload();
                        }, 'json');
                    }
                });
                //初始化需要剪裁的图片
                $('#image').cropper('replace', '/' + res.result.url, false );
            }
        });
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
