@extends('layouts.app')

@section('content')
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
    <style>
        .bus {
            display: flex;
        }

        .bus div {
            margin-left: 15px;
        }
    </style>
@endsection
