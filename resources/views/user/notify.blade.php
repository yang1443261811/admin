@extends('layouts.app')

@section('css')
    <style>
        .offset-md-2 {
            margin-left: 16.66666667%;
        }
        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
            max-width: 66.66666667%;
        }
        .card {
            border: none;
        }
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border-radius: 0.25rem;
        }
        .card-header {
            background-color: transparent;
            border: none;
        }
        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }
        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            /*background-color: rgba(0, 0, 0, 0.03);*/
            /*border-bottom: 1px solid rgba(0, 0, 0, 0.125);*/
        }
        .notifications .card-header .tip {
            height: 30px;
            line-height: 30px;
        }
        .float-right {
            float: right !important;
        }
        .btn-sm, .btn-group-sm > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.7875rem;
            line-height: 1.7;
            border-radius: 0.2rem;
        }
        .btn-success {
            color: #fff;
            background-color: #2ECC71;
            border-color: #2ECC71;
        }
        .notifications ul.notification li {
            margin-top: 3px;
            margin-bottom: 3px;
            padding: 5px 10px;
        }
        .text-info {
            color: #3498db !important;
        }
    </style>
@endsection
@section('content')
    <div class="container notifications">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <span class="tip">
                            <b>4</b>
                            Notifications
                        </span>
                        <a class="btn btn-success btn-sm float-right mark-as-read" href="javascript:;"
                           onclick="event.preventDefault();document.getElementById('mark-as-read').submit();">
                            Mark As Read
                        </a>
                        <form id="mark-as-read" action="http://blog2/user/notification" method="POST">
                            <input type="hidden" name="_token" value="vbiyQ18yiamDetGVkX9rr5NRS8yuMtUz9KsrYL7A">
                        </form>
                    </div>
                    <div class="card-body">
                        <ul class="notification">
                            <li :class="'1' ? 'bold' : ''">
                                <a class="text-info" href="http://blog2/user/pg_one">pg_one</a>
                                mentioned you in
                                <a class="text-info" href="http://blog2/enim-fugit-explicabo-magni-non-hnkjs">Enim fugit explicabo magni non.</a>
                            </li>
                            <li :class="'1' ? 'bold' : ''">
                                <a class="text-info" href="http://blog2/user/pg_one">pg_one</a>
                                mentioned you in
                                <a class="text-info" href="http://blog2/enim-fugit-explicabo-magni-non-hnkjs">Enim fugit explicabo magni non.</a>
                            </li>
                            <li :class="'1' ? 'bold' : ''">
                                <i :class="'1' ? 'fas fa-thumbs-up' : 'fas fa-thumbs-up-alt'"></i>
                                <a class="text-info" href="http://blog2/user/pg_one">pg_one</a> upvoted your comment on
                                <a class="text-info" href="http://blog2/enim-fugit-explicabo-magni-non-hnkjs">Enim fugit explicabo magni non.</a>
                            </li>
                            <li :class="'1' ? 'bold' : ''">
                                <i :class="'1' ? 'fas fa-thumbs-up' : 'fas fa-thumbs-up-alt'"></i>
                                <a class="text-info" href="http://blog2/user/pg_one">pg_one</a> upvoted your comment on
                                <a class="text-info" href="http://blog2/enim-fugit-explicabo-magni-non-hnkjs">Enim fugit explicabo magni non.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
