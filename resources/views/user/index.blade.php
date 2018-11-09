<html lang="zh">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"/>
    <title>PJ Blog Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link rel="stylesheet" href="/css/app.css?id=8f841e10d99c3fdf0293"/>
    <link rel="stylesheet" href="/css/common.css?id=8f841e10d99c3fdf0293"/>
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
<body>
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
                <div data-v-6750c142="" class="ibox">
                    <div data-v-6750c142="" class="ibox-title d-flex">
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal"> Users</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row" style="height:31px;">
                            <form action="/users" method="get" style="display: inherit;">
                                <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                    <input data-v-6750c142="" type="text" name="keyword" placeholder="" class="form-control" value="{{empty($keyword) ? '' : $keyword}}"/>
                                    <div data-v-6750c142="" class="input-group-append">
                                        <button data-v-6750c142="" type="submit" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                            <a href="/users/create" class="btn btn-sm btn-success" data-v-6750c142="" style="height:31px;">Create</a>
                        </small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID</th>
                                <th data-v-6750c142="" class="text-center"> Avatar</th>
                                <th data-v-6750c142=""> User Name</th>
                                <th data-v-6750c142=""> E-Mail Address</th>
                                <th data-v-6750c142="" class="text-center"> Status</th>
                                <th data-v-6750c142=""> Created At</th>
                                <th data-v-6750c142="" class="text-center"> Actions</th>
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            @if($users->isEmpty())
                                <tr data-v-6750c142="">
                                    <td data-v-6750c142="" class="text-center" colspan="7"> no Content</td>
                                </tr>
                            @else
                                @foreach($users as $user)
                                    <tr data-v-6750c142="">
                                        <td data-v-6750c142="" class="text-center"> {{$user->id}} </td>
                                        <td data-v-6750c142="" class="text-center"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAAD/CAIAAACxapedAAAABnRSTlMAAAAAAABupgeRAAAC+0lEQVR4nO3WUY3DMBRFwc2qAAItEAItEAItEEogrdSvp/bMILiyji0v53r8QdL/9AAYo3661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E/XY3rAO9u1T0+4ca7H9ISXnNhHvP10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrqWcz2mN8CMZXrAS67lL9mufXrCDT8futRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+upZzPaY3wIzH9ICvtF379IQbHrJP+fnQpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXT9QQVtBIfOxvrEwAAAABJRU5ErkJggg==" class="avatar img-fluid rounded-circle"/></td>
                                        <td data-v-6750c142=""> {{$user->name}} </td>
                                        <td data-v-6750c142=""> {{$user->email}} </td>
                                        <td data-v-6750c142="" class="component text-center">
                                            @if($user->status == 1)
                                                <span data-v-453bbac3="{{$user->status}}" data-v-6750c142="{{$user->id}}" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span>
                                            @else
                                                <span data-v-453bbac3="{{$user->status}}" data-v-6750c142="{{$user->id}}" style="color: rgb(191, 83, 41);"><i data-v-453bbac3="" class="fas fa-circle"></i></span>
                                            @endif
                                        </td>
                                        <td data-v-6750c142=""> {{$user->created_at}} </td>
                                        <td data-v-6750c142="" class="actions text-center">
                                            <a data-v-6750c142="" class="btn btn-info" href="/users/edit/{{$user->id}}"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a>
                                            <a data-v-6750c142="" class="btn btn-danger" href="/users/delete/{{$user->id}}"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <nav data-v-551c9b7c="" data-v-6750c142="" class="d-flex justify-content-center">
                            {{$users->links()}}
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
        title: "Are you sure？",
        text: "The action may affect some data, Please think twice！",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "YES！",
        cancelButtonText: "NO！",
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

    //更新用户状态
    $('.component span').click(function () {
        var self = $(this);
        swal(config).then(function (isConfirm) {
            if (isConfirm.value) {
                var status = parseInt(self.attr('data-v-453bbac3')) === 1 ? 0 : 1;
                var color = status === 1 ? 'rgb(142, 180, 203)' : 'rgb(191, 83, 41)';
                var url = '/users/status/' + self.attr('data-v-6750c142') + '?status='+status;
                $.get(url, function (res) {
                    self.attr('data-v-453bbac3', status);
                    self.css('color', color);
                    swal({title:"成功！",text:"用户状态设置成功.", type:"success", timer: 2000});
                });
            }
        });
    })

</script>
</body>
</html>