@extends('layouts.app')

@section('title-page', 'treno'. ' ' . $train->code_train)

@section('main-content')

<div class="card text-center">
    <div class="card-header">
        Treno:  <em>{{$train->code_train}}</em>
    </div>
    <div class="card-body">
        <h5 class="card-title">Stazione di arrivo:<em> {{$train->arrival_station}}</em></h5>
        <p class="card-text">Stazione di partenza:<em> {{$train->departure_station}}</em></p>
        <p class="card-text">Orario di partenza:<em> {{$train->arrival_time}}</em></p>
        <p class="card-text">Orario di arrivo:<em> {{$train->departure_time}}</em></p>
        <p class="card-text">Compagnia:<em> {{$train->agency}}</em></p>
        <p class="card-text">Numero di carrozze:<em> {{$train->n_carriages}}</em></p>

        <a href="#" class="btn btn-primary">Buy Ticket</a>
        <a href="{{route('guest.trains.index')}}" class="btn btn-warning">Torna alla lista di tutti i treni di oggi</a>

    </div>
</div>

@endsection
