@extends('admin.layouts.app')
@section('content')
    <h2 class="text-center">Список промокодов</h2>
    <hr>
    <a class="btn btn-success  mb-3" href="{{route('admin.promos.create')}}"
       title="Создать">Создать</a>

    <table class="table table-bordered table-striped table-sm ">
        <thead>
        <tr>
            <th scope="col" >Страница</th>
            <th scope="col" >Промокод</th>
            <th scope="col" >Скидка, %</th>
            <th scope="col" >Описание</th>
            <th scope="col" >Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($promos as $promo)
            <form action="{{route('admin.promos.update',$promo)}}" method="post" >
                @csrf
                @method('PUT')
            <tr>
                <td class="align-middle">{{$promo->id}}</td>
                <td class="align-middle">
                    <input type="text" name="promocode" value="{{$promo->promocode}}">
                </td>
                <td class="align-middle">
                    <input type="text" name="promodiscount" value="{{$promo->promodiscount}}">
                </td>
                <td>
                    <textarea type="text" id="promotext_{{$promo->id}}" name="promotext" class="form-control">{{$promo->promotext}}</textarea>
                    <script>
                        CKEDITOR.replace( 'promotext_{{$promo->id}}' );
                    </script>
                </td>
                <td class="align-middle">
                    {{--<a class="btn btn-info btn-sm" href="{{route('admin.promos.update',$promo)}}"--}}
                       {{--title="Сохранить">Сохранить</a><hr>--}}
                    <input type="submit" class="btn btn-info btn-sm" value="Сохранить" name="update">
                    <hr>
                    <input type="submit" class="btn btn-danger btn-sm" name="delete" value="Удалить" onclick="return confirm('Вы уверены?')">
                </td>
            </tr>
            </form>
        @empty

        @endforelse
        </tbody>
    </table>


@endsection