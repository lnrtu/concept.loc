@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список торговых марок</h2>
    <hr>
    <a class="btn btn-success  mb-3" href="{{route('admin.tms.create')}}"
       title="Создать">Создать</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Транслит</th>
            <th scope="col">Курс валюты</th>
            <th scope="col">Показывать</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($tms as $tm)
            <tr>
                <td>{{$tm->name}}</td>
                <td>{{$tm->translit}}</td>
                <td>{{$tm->rates}}</td>
                <td>
                    @switch($tm->showrates)
                        @case(0)
                        Не учитывать курс валют
                        @break

                        @case(1)
                        Показывать только грн
                        @break

                        @case(2)
                        Показывать только $
                        @break

                        @case(3)
                        Показывать все
                        @break

                    @endswitch

                </td>
                <td>
                    <form action="{{route('admin.tms.destroy',$tm->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <a class="btn btn-info btn-sm" href="{{route('admin.tms.edit',$tm)}}"
                           title="Изменить">Изменить</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Удалить"
                               onclick="return confirm('Вы уверены?')">
                    </form>
                </td>
            </tr>
        @empty

        @endforelse
        </tbody>
    </table>


@endsection