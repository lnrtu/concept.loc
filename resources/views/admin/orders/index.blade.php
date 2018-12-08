@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список заказов</h2>
    <hr>
    {{ $orders->links() }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Номер</th>
            <th scope="col">Имя</th>
            <th scope="col">Дата</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->date}}</td>
                <td>
                    <form action="{{route('admin.orders.destroy',$order->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <a class="btn btn-info btn-sm" href="{{route('admin.orders.show',$order->id)}}"
                           title="Просмотреть">Просмотреть</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Удалить" onclick="return confirm('Вы уверены?')">
                    </form>
                </td>
            </tr>
        @empty

        @endforelse
        </tbody>
    </table>
    {{ $orders->links() }}

@endsection