@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>友情链接</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="links text-center">
                    @foreach($links as $v)
                        <li><a href="{{$v->link}}">{{$v->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection