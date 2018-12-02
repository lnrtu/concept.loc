@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список общих настроек сайта</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @forelse($configs as $config)
        <tr>
            <td>{{$config->name_rus}}</td>
            <td><a class="btn btn-secondary btn-sm" href="#">Изменить</a></td>
        </tr>
        @empty

        @endforelse
        </tbody>
    </table>
    @editor('3')
@endsection