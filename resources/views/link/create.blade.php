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
                        <small class="float-right"><a href="/dashboard/links/" class="btn btn-sm btn-secondary">Back</a> </small>
                        <h5>Create Link</h5>
                    </div>
                    <div class="ibox-content">
                        <div data-v-4cfc7054="" class="row">
                            <form data-v-4cfc7054="" role="form" enctype="multipart/form-data" class="col-sm-4 offset-sm-4">
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="name">Link Name</label>
                                    <input data-v-4cfc7054="" type="text" id="name" name="name" placeholder="Link Name" class="form-control" />
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="link">Link</label>
                                    <input data-v-4cfc7054="" type="link" id="link" name="link" placeholder="Link" class="form-control" />
                                </div>
                                <div data-v-4cfc7054="" class="form-group">
                                    <label data-v-4cfc7054="" for="image">Image</label>
                                    <div data-v-4cfc7054="" class="upload-box">
                                        <input data-v-4cfc7054="" type="file" id="image" name="image" class="form-control" />
                                        <i data-v-4cfc7054="" class="fas fa-image link-image"></i>
                                        {{--<img data-v-4cfc7054="" src="http://blog2/storage/links/2018/11/01/lfp9pAF2XEfZ88M8JQf4DsEkaLttcGV71Njs7oc9.jpg" width="100" height="100" class="img-circle image" />--}}
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
</body>
</html>