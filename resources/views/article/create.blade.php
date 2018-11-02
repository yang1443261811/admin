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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
    <script>
        $( function() {
            $("#datepicker").datepicker();
        } );
    </script>
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
    {{--侧栏--}} @include('common.sidebar')
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
                        <small class="float-right"><a href="/dashboard/articles/" class="btn btn-sm btn-secondary">Back</a></small>
                        <h5>Create Article</h5>
                    </div>
                    <div class="ibox-content">
                        <div data-v-8181b19c="" class="row">
                            <form data-v-8181b19c="" class="col-sm-9 offset-sm-1">
                                <div data-v-8181b19c="" class="col-sm-12">
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" class="col-sm-2 col-form-label">Category</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <select class="js-example-basic-single form-control" name="state">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
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
                                        <div data-v-8181b19c="" class="col-sm-5">
                                            <!---->
                                            <div data-v-8181b19c="" class="cover-upload pull-right">
                                                <a data-v-8181b19c="" href="javascript:;" class="btn btn-success file"><span data-v-8181b19c="">Upload New File</span> <input data-v-8181b19c="" type="file" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" for="title" class="col-sm-2 col-form-label">Content</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <div id="editor"></div>
                                        </div>
                                    </div>
                                    <div data-v-8181b19c="" class="form-group row">
                                        <label data-v-8181b19c="" class="col-sm-2 col-form-label">Tag</label>
                                        <div data-v-8181b19c="" class="col-sm-10">
                                            <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="WY">Wyoming</option>
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
                                                <!---->
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
<script src="/js/common.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    var E = window.wangEditor;
    var editor2 = new E('#editor');
    editor2.create();
</script>
</body>
</html>