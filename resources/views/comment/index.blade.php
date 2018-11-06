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
        [v-cloak] { display: none; }
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
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal">Comments</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row">
                            <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                <input data-v-6750c142="" type="text" placeholder="" class="form-control" />
                                <div data-v-6750c142="" class="input-group-append">
                                    <button data-v-6750c142="" type="button" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                </div>
                            </div> </small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID </th>
                                <th data-v-6750c142=""> User Name </th>
                                <th data-v-6750c142=""> Commentable Type </th>
                                <th data-v-6750c142=""> Commentable Title </th>
                                <th data-v-6750c142=""> Created At </th>
                                <th data-v-6750c142="" class="text-center"> Actions </th>
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            @if($comments->isEmpty())
                                <tr data-v-6750c142="">
                                    <td data-v-6750c142="" class="text-center" colspan="6"> no Content </td>
                                </tr>
                            @else
                                @foreach($comments as $comment)
                                    <tr data-v-6750c142="">
                                        <td data-v-6750c142="" class="text-center"> {{$comment->id}} </td>
                                        <td data-v-6750c142=""> Felicia Beier </td>
                                        <td data-v-6750c142=""> {{$comment->commentable_type}} </td>
                                        <td data-v-6750c142=""> {{isset($comment->commentable) ? $comment->commentable->title : 'Be Forbidden!'}} </td>
                                        <td data-v-6750c142=""> {{$comment->created_at}} </td>
                                        <td data-v-6750c142="" class="actions text-center">
                                            <a data-v-6750c142="" class="btn btn-info" href="/comments/edit/{{$comment->id}}"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a>
                                            <a data-v-6750c142="" class="btn btn-danger" href="/comments/delete/{{$comment->id}}"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <!---->
                        <nav data-v-551c9b7c="" data-v-6750c142="" class="d-flex justify-content-center">
                           {{$comments->links()}}
                        </nav>
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
    $('.btn-danger').click(function (e) {
        e.preventDefault();
        var self = $(this);
        $.get(self.attr('href'), function (res) {
            if (res) {
                self.parents('tr').remove();
                toastr.info('删除成功');
            } else {
                toastr.warning('删除失败');
            }
            console.log(res);
        })
    })
</script>
</body>
</html>