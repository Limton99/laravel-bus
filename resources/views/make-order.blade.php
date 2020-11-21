@extends('layouts.app')

@section('content')
    <form action="/make-order-check" method="post">
        @csrf
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Место</label>
            <select class="form-control" id="exampleFormControlSelect1" name="place">
                @for($i=1; $i<=$cruise->capacity; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" class="form-control" name="price" value="3000" id="price" placeholder="">
        </div>
        <div class="form-group">
            <label for="bus_id"></label>
            <input type="text" class="form-control" id="bus_id" name="bus_id" value="{{$cruise->id}}" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
