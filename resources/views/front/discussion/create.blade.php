@extends('layouts.app')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style>
        .dicussion {
            margin-top: 40px;
        }
        .select2-container--default .select2-selection--multiple {
            border:2px solid #dce4ec
        }
        .select2-container .select2-selection--multiple {
            min-height: 38px;
        }
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #dce4ec 2px;
            outline: 0;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="dicussion row">
            <div class="col-md-9 col-md-offset-1">
                <form class="form-horizontal" action="/discussion/store" method="POST">
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-sm-2 control-label">标题</label>
                        <div class="col-sm-10">
                            <input type="text" id="title" name="title" class="form-control" value="">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">标签</label>
                        <div class="col-sm-10">
                            <select class="select js-example-basic-multiple" multiple="multiple" name="tags[]" style="width: 100%">
                                @foreach($tags as $item)
                                    <option value="{{$item->id}}">{{$item->tag}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tags'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                        <label for="content" class="col-sm-2 control-label">内容</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content" rows="12" name="content"></textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success pull-right" this.disabled=true;">创建新的讨论
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function () {
            //初始tag下拉框
            $('.js-example-basic-multiple').select2({placeholder: "请选择"});
        });
    </script>
@endsection

