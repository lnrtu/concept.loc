@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список новостей</h2>
    <hr>
    <a class="btn btn-success btn-sm mb-3" href="{{route('admin.novosts.create')}}"
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
        @forelse($novosts as $novost)
            <tr>
                <td>{{$novost->name}}</td>
                <td>{{$novost->data}}</td>
                <td>
                    <form action="{{route('admin.novosts.destroy',$novost->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <a class="btn btn-info btn-sm" href="{{route('admin.novosts.edit',$novost)}}"
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