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
    <link rel="stylesheet" href="/css/sweetalert2.min.css"/>
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
    @include('back.common.sidebar')
    <div id="page-content-wrapper">
        <nav class="navbar navbar bg-white">
            <div class="navbar-brand">
                <a class="navbar-toggler text-left"><i class="fas fa-bars text-secondary"></i></a>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div data-v-6750c142="" class="ibox">
                    <div data-v-6750c142="" class="ibox-title d-flex">
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal"> Tags</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row" style="height:31px;">
                            <form action="/admin/tags" method="get" style="display: inherit;">
                                <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                    <input data-v-6750c142="" type="text" name="keyword" placeholder="" class="form-control" value="{{empty($keyword) ? '' : $keyword}}"/>
                                    <div data-v-6750c142="" class="input-group-append" >
                                        <button data-v-6750c142="" type="submit" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                            <a href="/admin/tags/create" class="btn btn-sm btn-success" data-v-6750c142="" style="height:31px;">Create</a>
                        </small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID </th>
                                <th data-v-6750c142=""> Tag </th>
                                <th data-v-6750c142=""> Title </th>
                                <th data-v-6750c142=""> Meta Description </th>
                                <th data-v-6750c142=""> Created At </th>
                                <th data-v-6750c142="" class="text-center"> Actions </th>
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            @if($tags->isEmpty())
                                <tr data-v-6750c142="">
                                    <td data-v-6750c142="" class="text-center" colspan="6"> 没有数据 </td>
                                </tr>
                            @else
                                @foreach($tags as $tag)
                                    <tr data-v-6750c142="">
                                        <td data-v-6750c142="" class="text-center"> {{$tag->id}} </td>
                                        <td data-v-6750c142=""> {{$tag->tag}} </td>
                                        <td data-v-6750c142=""> {{$tag->title}} </td>
                                        <td data-v-6750c142=""> {{$tag->meta_description}} </td>
                                        <td data-v-6750c142=""> {{$tag->created_at}} </td>
                                        <td data-v-6750c142="" class="actions text-center">
                                            <a data-v-6750c142="" class="btn btn-info" href="/admin/tags/update/{{$tag->id}}"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a>
                                            <a data-v-6750c142="" class="btn btn-danger" href="/admin/tags/delete/{{$tag->id}}"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <nav data-v-551c9b7c="" data-v-6750c142="" class="d-flex justify-content-center">
                            {{ $tags->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="/js/common.js"></script>
<script>
    //sweetalert2插件配置
    var config = {
        title: "确定删除吗？",
        text: "你将无法恢复该数据记录！",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "确定删除！",
        cancelButtonText: "取消删除！",
    };

    //执行删除请求
    $('.btn-danger').click(function (e) {
        e.preventDefault();
        var self = $(this);
        swal(config).then(function (isConfirm) {
            //如果确认删除则通过ajax提交删除请求
            if (isConfirm.value) {
                $.get(self.attr('href'), function (res) {
                    if (res) {
                        self.parents('tr').remove();
                        swal({title:"删除成功！",text:"数据已经被删除.", type:"success", timer: 1500});
                    } else {
                        swal({title:"失败！",text:"删除失败,请重试.", type:"error", timer: 1500});
                    }
                });
            }
        });
    });

</script>
</body>
</html>