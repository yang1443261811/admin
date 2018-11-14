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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 38px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
        }
        .select2-container--open .select2-dropdown--below {
            z-index: 1000000;
        }
        .select2-dropdown {
            border: 1px solid #ced4da;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #ced4da;
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
    {{--侧栏--}} @include('back.common.sidebar')
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
                        <small class="float-right"><a href="/admin/articles/" class="btn btn-sm btn-secondary">Back</a></small>
                        <h5>Create Article</h5>
                    </div>
                    <div class="ibox-content">
                        <div data-v-8181b19c="" class="row">
                            <form data-v-8181b19c="" class="col-sm-9 offset-sm-1" action="/admin/articles/store">
                                {{csrf_field()}}
                                <div data-v-8181b19c="" class="col-sm-12">
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" class="col-sm-2 col-form-label">Category</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <select class="js-example-basic-single form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <input data-v-8181b19c="" type="text" id="title" name="title" class="form-control" />
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="subtitle" class="col-sm-2 col-form-label">SubTitle</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <input data-v-8181b19c="" type="text" id="subtitle" name="subtitle" class="form-control" />
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="page_image" class="col-sm-2 col-form-label">Page Image</label>
                                        <div data-v-8181b19c="" class="col-sm-5">
                                            <input data-v-8181b19c="" type="text" id="page_image" name="page_image" placeholder="ex: /uploads/default_avatar.png" class="form-control" />
                                        </div>
                                        <div data-v-8181b19c="" class="col-sm-5 cover-box">
                                            <div data-v-8181b19c="" class="cover-upload pull-right">
                                                <a data-v-8181b19c="" href="javascript:;" class="btn btn-success file">
                                                    <span data-v-8181b19c="">Upload New File</span>
                                                    <input data-v-8181b19c="" type="file" id="fileupload" data-url="/files/upload" name="image" multiple/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="title" class="col-sm-2 col-form-label">Content</label>
                                        <div data-v-8181b19c="" class="col-sm-10"><div id="editor"></div></div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" class="col-sm-2 col-form-label">Tag</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <select class="js-example-basic-multiple form-control" name="tags[]" multiple="multiple">
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="meta_description" class="col-sm-2 col-form-label">Meta Description</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <textarea data-v-8181b19c="" id="meta_description" name="meta_description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" class="col-sm-2 col-form-label">Date Time</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <div data-v-3faef998="" data-v-8181b19c="" class="cov-vue-date">
                                                <div data-v-3faef998="" class="datepickbox">
                                                    <input data-v-3faef998="" id="datepicker" type="text" title="input date" readonly="readonly" placeholder="Published At?" class="cov-datepicker" style="display: inline-block; padding: 6px 6px 6px 10px; height: 41px; line-height: 22px; font-size: 13px; border: 1px solid rgb(220, 228, 236); border-radius: 6px; color: rgb(95, 95, 95);" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <div data-v-8181b19c="" class="col-sm-2 col-form-label">
                                            Is Draft?
                                        </div>
                                        <div data-v-8181b19c="" class="col-sm-2">
                                            <div data-v-8181b19c="" class="togglebutton" style="margin-top: 6px;">
                                                <label data-v-8181b19c=""><input data-v-8181b19c="" type="checkbox" name="is_draft" /> <span data-v-8181b19c="" class="toggle"></span></label>
                                            </div>
                                        </div>
                                        <div data-v-8181b19c="" class="col-sm-2 col-form-label">
                                            Is Original?
                                        </div>
                                        <div data-v-8181b19c="" class="col-sm-2">
                                            <div data-v-8181b19c="" class="togglebutton" style="margin-top: 6px;">
                                                <label data-v-8181b19c=""><input data-v-8181b19c="" type="checkbox" name="is_original" /> <span data-v-8181b19c="" class="toggle"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-8181b19c="" class="col-sm-12">
                                    <div data-v-8181b19c="" class="form-group row">
                                        <div data-v-8181b19c="" class="offset-sm-2 col-sm-10">
                                            <button data-v-8181b19c="" type="submit" class="btn btn-info">Create </button>
                                        </div>
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="/js/wangEditor.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script src="/js/jquery.fileupload-process.js"></script>
<script src="/js/jquery.fileupload-validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
    $(function () {
        //初始tag下拉框
        $('.js-example-basic-multiple').select2({placeholder: "请选择"});

        //初始化分类下拉框
        $('.js-example-basic-single').select2();
    });

    //初始化日期选择器
    $("#datepicker").datepicker();

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

    //图片上传插件初始化
    $('#fileupload').fileupload({
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
            $('#page_image').val(data.result.file);
            if(parseInt($(".cover-box").find("img").length) === 0){
                $('.cover-upload').before('<img src="'+data.result.file+'"width="35" height="35"/>');
            } else {
                $(".cover-box").find("img").attr('src', data.result.file);
            }
        }
    });

    //ajax 提交表单数据
    $('form').on('submit', function (e) {
        e.preventDefault();
        var self = $(this);
        var params =  $.param({'content':editor.txt.html()})+'&'+self.serialize();
        $.post(self.attr('action'), params, function (res) {
            toastr.info('添加成功');
            window.setTimeout(function(){
                window.location.href = '/admin/articles';
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