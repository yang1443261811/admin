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
        .upload-box[data-v-4cfc7054] {
            position: relative;
            width: 100px;
            height: 100px;
        }
        input#image[data-v-4cfc7054] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100px;
            height: 100px;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0;
            z-index: 10;
        }
        .link-image[data-v-4cfc7054] {
            display: block;
            width: 100px;
            height: 100px;
            text-align: center;
            font-size: 30px;
            line-height: 100px;
            border: 2px dashed #e7eaec;
            border-radius: 5px;
            color: #e7eaec;
        }
        .image[data-v-4cfc7054] {
            border-radius: 5px;
        }
        .mask[data-v-4cfc7054] {
            display: none;
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            border-radius: 5px;
            z-index: 5;
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            line-height: 100px;
            font-size: 20px;
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
                        <small class="float-right"><a href="/links" class="btn btn-sm btn-secondary">Back</a> </small>
                        <h5>Update Link</h5>
                    </div>
                    <div class="ibox-content">
                        <div data-v-4cfc7054="" class="row">
                            <form data-v-4cfc7054="" role="form" enctype="multipart/form-data" action="/links/update/{{$link->id}}" class="col-sm-4 offset-sm-4">
                                {{csrf_field()}}
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="name">Link Name</label>
                                    <input data-v-4cfc7054="" type="text" id="name" name="name" placeholder="Link Name" class="form-control" value="{{$link->name}}"/>
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="link">Link</label>
                                    <input data-v-4cfc7054="" type="link" id="link" name="link" placeholder="Link" class="form-control" value="{{$link->link}}"/>
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="image">Image</label>
                                    <div data-v-4cfc7054="" class="upload-box">
                                        <input data-v-4cfc7054="" type="file" id="image" name="image" class="form-control fileupload" data-url="/files/upload" />
                                        <input type="hidden" value="{{$link->image}}" name="image" class="cover">
                                        {{--<i data-v-4cfc7054="" class="fas fa-image link-image"></i>--}}
                                        <img data-v-4cfc7054="" src="{{$link->image}}" width="100" height="100" class="img-circle image" />
                                        <div data-v-4cfc7054="" class="mask">
                                            <i data-v-4cfc7054="" class="fas fa-cloud-upload-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="">Is Enable</label>
                                    <div data-v-4cfc7054="" class="togglebutton" style="margin-top: 6px;">
                                        <label data-v-4cfc7054=""><input data-v-4cfc7054="" type="checkbox" name="status" /> <span data-v-4cfc7054="" class="toggle"></span></label>
                                    </div>
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <button data-v-4cfc7054="" type="submit" class="btn btn-info">Create</button>
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
<script src="/js/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script src="/js/jquery.fileupload-process.js"></script>
<script src="/js/jquery.fileupload-validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
    //图片上传插件初始化
    $('.fileupload').fileupload({
        dataType: 'json',
        maxFileSize: 2000000,//文件不超过5M
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
        done: function (e, data) {
            $('.cover').val(data.result.file);
            if($(".upload-box").find("img").length === 0){
                $('.link-image').replaceWith('<img data-v-4cfc7054="" src="'+data.result.file+'" width="100" height="100" class="img-circle image" />');
            } else {
                $(".upload-box").find("img").attr('src', data.result.file);
            }
        }
    });

    //ajax 提交表单数据
    $('form').on('submit', function (e) {
        e.preventDefault();
        var self = $(this);
        $.post(self.attr('action'), self.serialize(), function (res) {
            toastr.info('添加成功');
            window.setTimeout(function(){
                window.location.href = '/links';
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