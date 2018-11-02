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
                        <h5 data-v-6750c142="" class="align-self-center font-weight-normal"> Links</h5>
                        <small data-v-6750c142="" class="ml-auto d-flex flex-row">
                            <div data-v-6750c142="" class="input-group input-group-sm mr-2">
                                <input data-v-6750c142="" type="text" placeholder="" class="form-control" />
                                <div data-v-6750c142="" class="input-group-append">
                                    <button data-v-6750c142="" type="button" class="btn btn-outline-secondary"><span data-v-6750c142="" class="fa fa-search"></span></button>
                                </div>
                            </div> <a href="/links/create" class="btn btn-sm btn-success" data-v-6750c142="">Create</a></small>
                    </div>
                    <div data-v-6750c142="" class="ibox-content no-padding table-responsive">
                        <table data-v-6750c142="" class="table table-striped table-hover">
                            <thead data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <th data-v-6750c142="" class="width-5-percent text-center"> ID </th>
                                <th data-v-6750c142="" class="text-center"> Image </th>
                                <th data-v-6750c142="" class="text-center"> Name </th>
                                <th data-v-6750c142=""> Link </th>
                                <!---->
                                <th data-v-6750c142="" class="width-10-percent text-center"> Enabled </th>
                                <th data-v-6750c142=""> Created At </th>
                                <th data-v-6750c142="" class="text-center"> Actions </th>
                                <!---->
                            </tr>
                            </thead>
                            <tbody data-v-6750c142="">
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 1 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?47148" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Valerie Armstrong </td>
                                <td data-v-6750c142=""> https://www.luettgen.com/reprehenderit-aspernatur-illum-et-reprehenderit-animi-amet-sint-sit </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 2 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?67038" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Leo Howell </td>
                                <td data-v-6750c142=""> https://www.will.net/nihil-est-incidunt-saepe-quis-cumque-dolor-eum </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 3 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?62731" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Ocie Gutmann MD </td>
                                <td data-v-6750c142=""> https://www.zulauf.com/quam-dolorem-rerum-ipsum-voluptatem-qui-accusamus-ea </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 4 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?57544" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Priscilla Pouros </td>
                                <td data-v-6750c142=""> http://www.wyman.com/ </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 5 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?42946" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Edison Mosciski </td>
                                <td data-v-6750c142=""> http://cartwright.info/facere-id-possimus-fugiat-voluptas </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 6 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?97871" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Dr. Angelica Wiza I </td>
                                <td data-v-6750c142=""> http://www.carter.info/explicabo-molestiae-repudiandae-ut-numquam.html </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 7 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?76453" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Athena Toy PhD </td>
                                <td data-v-6750c142=""> http://crona.com/ducimus-rerum-repellat-repudiandae-hic-sed </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 8 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?54275" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Prof. Cydney Schmeler </td>
                                <td data-v-6750c142=""> https://trantow.com/beatae-dolores-necessitatibus-possimus-quia-fuga.html </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 9 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?24838" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Deven Schoen </td>
                                <td data-v-6750c142=""> http://metz.biz/nulla-culpa-facere-nisi-saepe.html </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
                                <td data-v-6750c142=""> 2018-11-01 05:10:34 </td>
                                <td data-v-6750c142="" class="actions text-center"><a data-v-6750c142="" class="btn btn-info"><i data-v-6750c142="" class="fas fa-pencil-alt"></i> </a><a data-v-6750c142="" class="btn btn-danger"><i data-v-6750c142="" class="fas fa-trash-alt"></i> </a></td>
                                <!---->
                            </tr>
                            <tr data-v-6750c142="">
                                <td data-v-6750c142="" class="text-center"> 10 </td>
                                <td data-v-6750c142="" class="text-center"><img src="https://lorempixel.com/640/480/?55439" width="50" height="50" class="rounded-circle" /></td>
                                <td data-v-6750c142="" class="text-center"> Percy Bauch </td>
                                <td data-v-6750c142=""> http://kutch.com/laborum-quibusdam-voluptatibus-vitae-voluptatem-inventore-suscipit.html </td>
                                <!---->
                                <td data-v-6750c142="" class="component text-center"><span data-v-453bbac3="" data-v-6750c142="" style="color: rgb(142, 180, 203);"><i data-v-453bbac3="" class="fas fa-circle"></i></span></td>
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