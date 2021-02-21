@extends('layouts.app')   {{--здесь будет загружаться сам шаблон--}}

@section('content')       {{--начало секции содержимого--}}

<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Заголовок</h1>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Цена</th>
                </thead>
                <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{$note->id}}</td>
                        <td>{{$note->name}}</td>
                        <td>{{$note->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $notes->links() }} {{--вывод пагинатора--}}
    </div>
</div>

@endsection               {{--конец секции содержимого--}}
