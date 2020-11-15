@extends('layouts.app')

@section('content')
    <div class="card">
            <img src={{$cruise->image}} style="width:100%" />
            <h4 class="card-title">{{$cruise->name}}</h4>
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
    </div>
@endsection
