@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Содержание новости</h2>
    <form action="{{route('admin.novosts.update', $novost)}}" class="form" method="post">
        @csrf
        @method('put')
        <hr>
        <nav class="navbar navbar-expand-sm navbar-dark bg-light">
            <a href="{{route('admin.novosts.index')}}" class="btn btn-info mr-auto ">Назад</a>
            <input class="btn btn-success  ml-auto" type="submit" value="Сохранить">
        </nav>
        <hr>
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" class="form-control" value="{{$novost->name}}">
        </div>
        <div class="form-group">
            <label for="short_src">Краткое содержание</label>
            <textarea type="text" name="short_src" class="form-control">{{$novost->short_src}}</textarea>
        </div>
        <div class="form-group">
            <label for="full_src">Содержание</label>
            <textarea type="text" name="full_src" class="form-control">{{$novost->full_src}}</textarea>
            @editor('full_src')
        </div>
        <div class="form-group">
            <label for="data">Дата</label>
            <input type="date" name="data" class="form-control" value="{{$novost->data}}">
        </div>
        <div class="form-group">
            <label for="title">Заголовок</label>
            <textarea type="text" name="title" class="form-control">{{$novost->title}}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea type="text" name="description" class="form-control">{{$novost->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="keywords">Ключевые слова</label>
            <textarea type="text" name="keywords" class="form-control">{{$novost->keywords}}</textarea>
        </div>
        <div class="form-group text-left">
            <input class="btn btn-success form-control" type="submit" value="Сохранить">
        </div>
    </form>
@endsection