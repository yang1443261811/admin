<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="PJ Blog,blog,pigjian,laravel,vuejs">
    <meta name="description" content="hi">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link rel="shortcut icon" href="/img/io.jpg">

    <title>Yang Blog</title>

    <link rel="stylesheet" href="/css/home.css">

    <style>
        .dicussion {
            margin-top: 40px;
        }
    </style>
</head>
<body>
<div id="app">
    @include('navbar')
    <div class="main">
        <div class="container">
            <div class="dicussion row">
                <div class="col-md-9 col-md-offset-1">
                    <form class="form-horizontal" action="/discussion/store" method="POST">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" name="title" class="form-control" value="">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">标签</label>
                            <div class="col-sm-10">
                                <select class="select" multiple="multiple" name="tags[]" style="width: 100%">
                                    <option value="1">Git</option>
                                    <option value="2">入门</option>
                                    <option value="3">components</option>
                                    <option value="4">VarDumper</option>
                                    <option value="5">Linux</option>
                                    <option value="6">LNMP</option>
                                    <option value="7">CentOS</option>
                                    <option value="8">MySQL</option>
                                    <option value="9">Laravel</option>
                                    <option value="13">VisitorRegistry</option>
                                    <option value="14">浏览数</option>
                                    <option value="15">统计</option>
                                    <option value="16">Collection</option>
                                    <option value="17">Homestead</option>
                                    <option value="18">Ubuntu</option>
                                    <option value="19">PHP7</option>
                                    <option value="20">HTTPS</option>
                                    <option value="21">Domain</option>
                                    <option value="22">Vuejs</option>
                                    <option value="23">Photo</option>
                                    <option value="24">编辑器</option>
                                    <option value="31">分页</option>
                                    <option value="32">overtrue</option>
                                    <option value="33">Elasticsearch</option>
                                    <option value="34">Kibana</option>
                                    <option value="35">Marvel</option>
                                    <option value="36">API</option>
                                    <option value="37">Token</option>
                                    <option value="38">Authentication</option>
                                    <option value="39">Iterm2</option>
                                    <option value="40">fish</option>
                                    <option value="41">Others</option>
                                    <option value="42">Blog</option>
                                    <option value="43">share</option>
                                    <option value="44">Deployer</option>
                                    <option value="45">Package</option>
                                    <option value="46">Algorithm</option>
                                    <option value="47">Composer</option>
                                    <option value="48">Python</option>
                                    <option value="49">Redis</option>
                                </select>
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-sm-2 control-label">内容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content" rows="12" name="content"></textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success pull-right" this.disabled=true;">创建新的讨论
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</div>

<!-- Scripts -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/layer/layer.js"></script>
<script>

    $('.dropdown').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            $(this).addClass('open');
        }
    });

    $('.navbar-toggle').click(function () {
        $('#app-navbar-collapse').toggle();
    });

</script>


</body>
</html>
