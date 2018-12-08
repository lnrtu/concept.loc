@extends('admin.layouts.app')
@section('content')


    @if($config)

        <div class="card">
            <div class="card-header">
                <h2 class="text-left">{{$config->name_rus}}</h2>
            </div>
            <div class="card-body">
                <a href="{{route('admin.configs.index')}}" class="btn btn-info text-left mb-3">Назад</a>
                <form action="{{route('admin.configs.update',$config->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <textarea class="form-control" name="value" id="" cols="30"
                                  rows="7">{{$config->value}}</textarea>
                    </div>
                    <div class="form-group text-left">
                        <input class="btn btn-success form-control" type="submit" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>

    @endif

@endsection