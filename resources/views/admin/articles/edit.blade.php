@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Содержание статьи</h2>
    <form action="{{route('admin.articles.update', $article)}}" class="form" method="post">
        @csrf
        @method('put')
        <hr>
        <nav class="navbar navbar-expand-sm navbar-dark bg-light">
            <a href="{{route('admin.articles.index')}}" class="btn btn-info mr-auto ">Назад</a>
            <input class="btn btn-success  ml-auto" type="submit" value="Сохранить">
        </nav>
        <hr>
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" class="form-control" value="{{$article->name}}">
        </div>
        <div class="form-group">
            <label for="short_src">Краткое содержание</label>
            <textarea type="text" name="short_src" class="form-control">{{$article->short_src}}</textarea>
        </div>
        <div class="form-group">
            <label for="full_src">Содержание</label>
            <textarea type="text" name="full_src" class="form-control">{{$article->full_src}}</textarea>
            @editor('full_src')
        </div>
        <div class="form-group">
            <label for="data">Дата</label>
            <input type="date" name="data" class="form-control" value="{{$article->data}}">
        </div>
        <div class="form-group">
            <label for="title">Заголовок</label>
            <textarea type="text" name="title" class="form-control">{{$article->title}}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea type="text" name="description" class="form-control">{{$article->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="keywords">Ключевые слова</label>
            <textarea type="text" name="keywords" class="form-control">{{$article->keywords}}</textarea>
        </div>
        <div class="form-group text-left">
            <input class="btn btn-success form-control" type="submit" value="Сохранить">
        </div>
    </form>
@endsection