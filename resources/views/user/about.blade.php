@extends('layouts.app')

@section('css')
    <style>
        [v-cloak] {
            display: none;
        }
        .personal-info li {
            float: left;
            list-style: none;
            margin-right: 10px;
            margin-bottom: 20px;
            height: 43px;
            border: 1px solid #ECF0F1;
            overflow: hidden;
        }
        .personal-info li em {
            padding: 0 15px;
            line-height: 43px;
            font-size: 16px;
            color: #9b9b9b;
            font-weight: 400;
            font-style: normal;
        }
        .personal-info li span {
            padding: 15px;
            line-height: 42px;
            color: #34495E;
            font-weight: 400;
            background: #ECF0F1;
            border-left: 1px solid #ECF0F1;
        }
        .head-img {
            max-height: none!important;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 50%;
            background: #FFF;
            -webkit-transition: -webkit-transform 600ms;
            -moz-transition: -moz-transform 600ms;
            transition: transform 600ms;
        }
        .head-img:hover {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3>关于我</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="user text-center" style="margin-bottom: 20px;">
            <img src="/img/log.jpg" class="avatar img-circle head-img">
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Who am I?
                    </div>
                    <div class="panel-body personal-info">
                        <ul class="list-unstyled">
                            <li>
                                <em>Name</em>
                                <span>杨骑铭（QiMing Yang）</span>
                            </li>
                            <li>
                                <em>Gender</em>
                                <span>男</span>
                            </li>
                            <li>
                                <em>Age</em>
                                <span>94 后</span>
                            </li>
                            <li>
                                <em>Email</em>
                                <span>1443261811@QQ.com</span>
                            </li>
                            <li>
                                <em>Website</em>
                                <span><a target="_blank" href="https://pigjian.com">https://pigjian.com</a></span>
                            </li>
                            <li>
                                <em>Github</em>
                                <span><a target="_blank" href="https://github.com/yang1443261811"><i class="ion-social-github"></i></a></span>
                            </li>
                            <li>
                                <em>Wechat</em>
                                <span>yang1443261811</span>
                            </li>
                            <li>
                                <em>QQ</em>
                                <span>1443261811</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
