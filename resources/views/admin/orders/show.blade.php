@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Просмотр заказа</h2>
    <hr>
    <a href="{{ URL::previous() }}" class="btn btn-info text-left mb-3">Назад</a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Заказ № {{$order->id}}</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <td>Имя</td>
                    <td class="font-weight-bold">{{$order->name}}</td>
                </tr>
                <tr>
                    <td>Дата заказа</td>
                    <td class="font-weight-bold">{{$order->date}}</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td class="font-weight-bold">{{$order->address}}</td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td class="font-weight-bold">{{$order->email}}</td>
                </tr>
                <tr>
                    <td>Телефон</td>
                    <td class="font-weight-bold">{{$order->tel}}</td>
                </tr>
                <tr>
                    <td>Смс</td>
                    <td class="font-weight-bold">{{$order->sms_id}}</td>
                </tr>
                </tr>
                <tr>
                    <td>Смс состояние</td>
                    <td class="font-weight-bold">{{$order->sms_send}}</td>
                </tr>
                <tr>
                    <td>Коментарии</td>
                    <td class="font-weight-bold">{{$order->comment}}</td>
                </tr>
                </tr>
                <tr>
                    <td>Заказаные продукты</td>
                    <td class="font-weight-bold">{!! $order->products !!}</td>
                </tr>
            </table>
        </div>
    </div>


@endsection