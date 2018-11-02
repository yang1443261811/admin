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
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal">Discussions</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row">
                            <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                <input data-v-6750c142="" type="text" placeholder="" class="form-control" />
                                <div data-v-6750c142="" class="input-group-append">
                                    <button data-v-6750c142="" type="button" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                </div>
                            </div> <a href="/discussions/create" class="btn btn-sm btn-success" data-v-6750c142="">Create</a></small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID </th>
                                <th data-v-6750c142="" class="text-center"> User Name </th>
                                <th data-v-6750c142=""> Title </th>
                                <!---->
                                <th data-v-6750c142="" class="text-center"> Status </th>
                                <th data-v-6750c142=""> Created At </th>
                                <th data-v-6750c142="" class="text-center"> Actions </th>
                                <!---->
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 1 </td>
                                <td data-v-6750c142="" class="text-center">Issac DuBuque</td>
                                <td data-v-6750c142=""> Dicta nam consequatur enim deleniti aspernatur nihil minima. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 2 </td>
                                <td data-v-6750c142="" class="text-center">Camryn Wilderman DDS</td>
                                <td data-v-6750c142=""> Et voluptatem accusantium sed sint nulla molestiae. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 3 </td>
                                <td data-v-6750c142="" class="text-center">Dr. Brant McDermott</td>
                                <td data-v-6750c142=""> Aut et placeat cupiditate voluptas. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 4 </td>
                                <td data-v-6750c142="" class="text-center">Prof. Rickie Ferry Sr.</td>
                                <td data-v-6750c142=""> Esse magnam expedita dolores dolor. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 5 </td>
                                <td data-v-6750c142="" class="text-center">Prof. Rickie Ferry Sr.</td>
                                <td data-v-6750c142=""> Incidunt sit hic beatae sed. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 6 </td>
                                <td data-v-6750c142="" class="text-center">Kathleen Orn</td>
                                <td data-v-6750c142=""> Culpa maiores excepturi cum. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 7 </td>
                                <td data-v-6750c142="" class="text-center">Ms. Trudie Murphy MD</td>
                                <td data-v-6750c142=""> Veniam nobis vero culpa et adipisci ut. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 8 </td>
                                <td data-v-6750c142="" class="text-center">Camryn Wilderman DDS</td>
                                <td data-v-6750c142=""> Quis ipsa eum laborum quasi eum sed et omnis. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 9 </td>
                                <td data-v-6750c142="" class="text-center">admin</td>
                                <td data-v-6750c142=""> Quis ullam omnis ratione est accusamus voluptate. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 10 </td>
                                <td data-v-6750c142="" class="text-center">Issac DuBuque</td>
                                <td data-v-6750c142=""> Laborum et quia placeat quia beatae. </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 5 hours ago </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-success"><i data-v-6750c142="" class="fas fa-eye"></i> </a><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            </tbody>
                        </table>
                        <!---->
                        <nav data-v-551c9b7c="" data-v-6750c142="" class="d-flex justify-content-center">
                            <ul data-v-551c9b7c="" class="pagination">
                                <li data-v-551c9b7c="" class="page-item disabled"><a data-v-551c9b7c="" class="page-link"><i data-v-551c9b7c="" class="fas fa-chevron-left"></i></a></li>
                                <li data-v-551c9b7c="" class="page-item active"><a data-v-551c9b7c="" class="page-link"> 1 </a></li>
                                <li data-v-551c9b7c="" class="page-item"><a data-v-551c9b7c="" class="page-link"> 2 </a></li>
                                <li data-v-551c9b7c="" class="page-item"><a data-v-551c9b7c="" class="page-link"><i data-v-551c9b7c="" class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
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