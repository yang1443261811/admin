<html lang="zh">
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
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row">
                            <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                <input data-v-6750c142="" type="text" placeholder="" class="form-control" />
                                <div data-v-6750c142="" class="input-group-append">
                                    <button data-v-6750c142="" type="button" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                </div>
                            </div> <a href="/users/create" class="btn btn-sm btn-success" data-v-6750c142="">Create</a></small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID </th>
                                <th data-v-6750c142="" class="text-center"> Avatar </th>
                                <th data-v-6750c142=""> User Name </th>
                                <th data-v-6750c142=""> E-Mail Address </th>
                                <!---->
                                <th data-v-6750c142="" class="text-center"> Status </th>
                                <th data-v-6750c142=""> Created At </th>
                                <th data-v-6750c142="" class="text-center"> Actions </th>
                                <!---->
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 12 </td>
                                <td data-v-6750c142="" class="text-center"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAAD/CAIAAACxapedAAAABnRSTlMAAAAAAABupgeRAAAC+0lEQVR4nO3WUY3DMBRFwc2qAAItEAItEAItEEogrdSvp/bMILiyji0v53r8QdL/9AAYo3661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E/XY3rAO9u1T0+4ca7H9ISXnNhHvP10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrqWcz2mN8CMZXrAS67lL9mufXrCDT8futRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+upZzPaY3wIzH9ICvtF379IQbHrJP+fnQpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXT9QQVtBIfOxvrEwAAAABJRU5ErkJggg==" class="avatar img-fluid rounded-circle" /></td>
                                <td data-v-6750c142=""> yqm </td>
                                <td data-v-6750c142=""> 1443261811@qq.com </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:13:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 1 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> admin </td>
                                <td data-v-6750c142=""> admin@pigjian.com </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 2 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Camryn Wilderman DDS </td>
                                <td data-v-6750c142=""> greenholt.hosea@example.net </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 3 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Felicia Beier </td>
                                <td data-v-6750c142=""> gutmann.blaze@example.org </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 4 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Kasey Rohan </td>
                                <td data-v-6750c142=""> parker.jensen@example.org </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 5 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Miss Kassandra Mohr </td>
                                <td data-v-6750c142=""> anita.stehr@example.org </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 6 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Issac DuBuque </td>
                                <td data-v-6750c142=""> bjacobi@example.com </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 7 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Kathleen Orn </td>
                                <td data-v-6750c142=""> beahan.jerrod@example.net </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 8 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Prof. Daisha Effertz I </td>
                                <td data-v-6750c142=""> reynold.kohler@example.com </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 9 </td>
                                <td data-v-6750c142="" class="text-center"><img src="/images/default.png" class="avatar img-fluid rounded-circle" /> </td>
                                <td data-v-6750c142=""> Ms. Trudie Murphy MD </td>
                                <td data-v-6750c142=""> halvorson.haskell@example.com </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:33 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            </tbody>
                        </table>
                        <!---->
                        <nav data-v-551c9b7c="" data-v-6750c142="" class="d-flex justify-content-center">
                            <ul data-v-551c9b7c="" class="pagination">
                                <li data-v-551c9b7c="" class="page-item disabled"><a data-v-551c9b7c="" class="page-link"><i data-v-551c9b7c="" class="fas fa-chevron-left"></i></a></li>
                                <li data-v-551c9b7c="" class="page-item active"><a data-v-551c9b7c="" class="page-link"> 1 </a></li>
                                <li data-v-551c9b7c="" class="page-item"><a data-v-551c9b7c="" class="page-link"> 2 </a> </li>
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