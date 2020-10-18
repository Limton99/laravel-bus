@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Место</th>
            <th scope="col">Тип</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($cruise->passenger as $el)
                <tr>
                    <td>{{$el->name}}</td>
                    <td>{{$el->place}}</td>
                    <td><button class="btn btn-success">Online</button></td>
                    <td><a href="" class="btn btn-primary">Отправить чек</a></td>
                    <td><a href="" class="btn btn-warning">Редактировать</a></td>
                    <td><a href='{{route('delete-passenger', $el->id)}}' class="btn btn-danger">Удалить</a></td>
                </tr>

        @endforeach
                </tbody>
            </table>
    <style>
        .bus {
            display: flex;
        }

        .bus div {
            margin-left: 15px;
        }
    </style>
@endsection
