@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Редактирование торговой марки</h2>
    <form action="{{route('admin.tms.update', $tm)}}" class="form" method="post">
        @csrf
        @method('put')
        <hr>
        <nav class="navbar navbar-expand-sm navbar-dark bg-light">
            <a href="{{route('admin.tms.index')}}" class="btn btn-info mr-auto ">Назад</a>
            <input class="btn btn-success  ml-auto" type="submit" value="Сохранить">
        </nav>
        <hr>
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" class="form-control" value="{{$tm->name}}">
        </div>
        <div class="form-group">
            <label for="translit">Транслит</label>
            <input type="text" name="translit" class="form-control" value="{{$tm->translit}}">
        </div>
        <div class="form-group">
            <label for="rates">Курс валюты</label>
            <input type="text" name="rates" class="form-control" value="{{$tm->rates}}">
        </div>
        <div class="form-group">
            <label for="rates">Опции отображения цены</label>

            {{ Form::select('showrates', ['Не учитывать курс валют', 'Показывать только грн','Показывать только $',                'Показывать все'], $tm->showrates) }}
        </div>
        <div class="form-group text-left">
            <input class="btn btn-success form-control" type="submit" value="Сохранить">
        </div>
    </form>
@endsection