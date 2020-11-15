@extends('layouts.app')

@section('content')
{{--    @include('search-modal')--}}

    <form method="get" action="{{route('search')}}" >
        <div class="form-group">
            <label for="exampleInputEmail1">Откуда</label>
            <input type="text" class="form-control" name="from" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Откуда">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Куда</label>
            <input type="text" class="form-control" name="to" id="exampleInputPassword1" placeholder="Куда">
        </div>

        <button type="submit" class="btn btn-primary">Найти</button>
    </form>
    <div class="card-columns" >
    @foreach($cruises as $el)
            <div class="card">
                <a href="{{route('cruise-one', $el->id)}}">
                <img src={{$el->image}} style="width:100%" />
                <h4 class="card-title">{{$el->name}}</h4>
                <b>Отправление</b>
                <p class="card-text">Дата - {{$el->departure_date}}</p>
                <b>Прибытие</b>
                <p class="card-text">Дата - {{$el->arrival_date}}</p>
                <div class="bus">
                    <div>
                        <b>Автобус</b>
                        <p class="card-text">{{$el->bus}}</p>
                    </div>
                    <div>
                        <b>Номер</b>
                        <p>{{$el->bus_number}}</p>
                    </div>
                    <div>
                        <br>
                        <p>{{$el->capacity}} мест</p>
                    </div>

                </div>
                </a>
            </div>
    @endforeach


    </div>
{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--        Launch demo modal--}}
{{--    </button>--}}




    <style>
        .bus {
            display: flex;
        }

        .bus div {
            margin-left: 15px;
        }
        .card a {
            color: black;
        }
    </style>
@endsection
