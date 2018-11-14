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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
    <style>
        [v-cloak] { display: none; }
        .select2-container--default .select2-selection--multiple {
            border: 1px solid #ced4da;
        }
        .select2-container .select2-selection--multiple {
            min-height: 38px;
        }
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #ced4da 1px;
            outline: 0;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color:white;
            background-color: #41b883;
            border: 1px solid #41b883;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #41b883;
            color: white;
        }
        .select2-container--default .select2-selection--single {
            border: 1px solid #ced4da;
        }
        .select2-container .select2-selection--single {
            height: 38px;
        }
        .select2-container--open .select2-dropdown--below {
            z-index: 1000000;
        }
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
                        <small class="float-right"><a href="/admin/discussions/" class="btn btn-sm btn-secondary">Back</a></small>
                        <h5>Update Discussion</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form class="col-sm-9 offset-sm-1" method="post" action="/admin/discussions/update/{{$discussion->id}}">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" value="{{$discussion->title}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-10">
                                        <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10" id="editor"><p>{!!$discussion->content!!}</p></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 col-form-label">
                                        Status
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="togglebutton" style="margin-top: 6px;">
                                            <label><input type="checkbox" name="status" value="1" /> <span class="toggle"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-info">Update</button>
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
<script src="/js/wangEditor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="/js/common.js"></script>
<script>
    $(function(){
        //初始tag下拉框
        var option = [];
        @foreach($discussion->tags as $item)
            option.push('{{$item->id}}');
        @endforeach
        //初始tag下拉框
        $('.js-example-basic-multiple').select2({placeholder: "请选择"}).val(option).trigger('change');

        //初始化文本编辑器 start
        var E = window.wangEditor;
        var editor = new E('#editor');
        //开启debug模式
        editor.customConfig.debug = true;
        // 自定义菜单配置
        editor.customConfig.menus = [
            'head',  // 标题
            'bold',  // 粗体
            'fontSize',  // 字号
            'fontName',  // 字体
            'italic',  // 斜体
            'underline',  // 下划线
            'foreColor',  // 文字颜色
            'backColor',  // 背景颜色
            'link',  // 插入链接
            'list',  // 列表
            'justify',  // 对齐方式
            'quote',  // 引用
            'image',  // 插入图片
            'table',  // 表格
            'video',  // 插入视频
            'code',  // 插入代码
        ];
        editor.create();
        //初始化文本编辑器 end

        //ajax 提交表单数据
        $('form').on('submit', function (e) {
            e.preventDefault();
            var self = $(this);
            var params =  $.param({'content':editor.txt.html()})+'&'+self.serialize();
            $.post(self.attr('action'), params, function (res) {
                toastr.info('更新成功');
                window.setTimeout(function(){
                    window.location.href = '/discussions';
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

    });

</script>
</body>
</html>