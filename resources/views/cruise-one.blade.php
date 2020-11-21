@extends('layouts.app')

@section('content')

    <br>
        <a type="button" class="btn btn-outline-primary" href="{{route('make-order', $cruise->id)}}">
            Сделать заказ
        </a>
    <div class="info">
        <img src="/{{$cruise->image}}" style="width:100%" />
        <h2>{{$cruise->name}}</h2>
        <b>Отправление</b>
        <p class="card-text">Дата - {{$cruise->departure_date}}</p>
        <b>Прибытие</b>
        <p class="card-text">Дата - {{$cruise->arrival_date}}</p>
        <div class="bus">
            <div>
                <b>Автобус</b>
                <p class="card-text">{{$cruise->bus}}</p>
            </div>
            <div>
                <b>Номер</b>
                <p>{{$cruise->bus_number}}</p>
            </div>
            <div>
                <br>
                <p>{{$cruise->capacity}} мест</p>
            </div>

        </div>
        {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
        {{--        Launch demo modal--}}
        {{--    </button>--}}
    </div>
    <br>
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
                    <td><a href="{{route('update-passenger', $el->id)}}" class="btn btn-warning">Редактировать</a></td>
                    <td><a href='{{route('delete-passenger', $el->id)}}' class="btn btn-danger">Удалить</a></td>
                </tr>

        @endforeach
                </tbody>
            </table>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bus {
            display: flex;
        }

        .bus div {
            margin-left: 15px;
            width: 80%;
        }

        .info {
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px;
            max-width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            text-align: center;
            align-items: center;
        }
    </style>
@endsection
