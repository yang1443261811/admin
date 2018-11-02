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
    </style>
    <script>
        window.Laravel = {
            csrfToken: "sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"
        }
        window.Language = "en"
    </script>
    <script type="text/javascript" charset="utf-8" async="" src="/js/19.c3c787c6964ede5060a5.js"></script>
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
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal"> Tags</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row">
                            <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                <input data-v-6750c142="" type="text" placeholder="" class="form-control" />
                                <div data-v-6750c142="" class="input-group-append">
                                    <button data-v-6750c142="" type="button" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                </div>
                            </div> <a href="/tags/create" class="btn btn-sm btn-success" data-v-6750c142="">Create</a></small>
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
                                <!---->
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 1 </td>
                                <td data-v-6750c142=""> dolorum </td>
                                <td data-v-6750c142=""> Illum ut qui odio. </td>
                                <td data-v-6750c142=""> Itaque consequatur est alias doloribus blanditiis possimus. </td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 2 </td>
                                <td data-v-6750c142=""> odit </td>
                                <td data-v-6750c142=""> Minus non sed quia omnis sit aliquam adipisci. </td>
                                <td data-v-6750c142=""> Voluptas molestiae magnam nam et distinctio odio eligendi facilis. </td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 3 </td>
                                <td data-v-6750c142=""> commodi </td>
                                <td data-v-6750c142=""> Quasi deserunt expedita rerum quas impedit eaque laboriosam. </td>
                                <td data-v-6750c142=""> Nisi rerum culpa voluptas eveniet aspernatur. </td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 4 </td>
                                <td data-v-6750c142=""> molestias </td>
                                <td data-v-6750c142=""> Cum laboriosam laborum aperiam labore eligendi. </td>
                                <td data-v-6750c142=""> Voluptate officiis ut ad nisi amet sunt. </td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 5 </td>
                                <td data-v-6750c142=""> est </td>
                                <td data-v-6750c142=""> Incidunt voluptatem quasi quisquam ut exercitationem consequatur. </td>
                                <td data-v-6750c142=""> Suscipit excepturi beatae rem veniam ad porro est. </td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
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
                                <li data-v-551c9b7c="" class="page-item disabled"><a data-v-551c9b7c="" class="page-link"><i data-v-551c9b7c="" class="fas fa-chevron-right"></i></a></li>
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