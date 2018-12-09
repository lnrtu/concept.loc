@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список статей</h2>
    <hr>
    <a class="btn btn-success  mb-3" href="{{route('admin.articles.create')}}"
       title="Создать">Создать</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Дата</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($articles as $article)
            <tr>
                <td>{{$article->name}}</td>
                <td>{{$article->data}}</td>
                <td>
                    <form action="{{route('admin.articles.destroy',$article->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <a class="btn btn-info btn-sm" href="{{route('admin.articles.edit',$article)}}"
                           title="Изменить">Изменить</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Удалить" onclick="return confirm('Вы уверены?')">
                    </form>
                </td>
            </tr>
        @empty

        @endforelse
        </tbody>
    </table>


@endsection