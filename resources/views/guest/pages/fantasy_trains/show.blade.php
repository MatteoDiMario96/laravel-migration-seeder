@extends('layouts.app')

@section('title-page', 'treno'. ' ' . $fantasyTrain->code_train)

@section('main-content')

<div class="card text-center">
    <div class="card-header">
        <h5>{{$fantasyTrain->manga_anime}}</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title">Stazione di arrivo:<em> {{$fantasyTrain->arrival_station}}</em></h5>
        <p class="card-text">Stazione di partenza:<em> {{$fantasyTrain->departure_station}}</em></p>
        <p class="card-text">Orario di partenza:<em> {{$fantasyTrain->arrival_time}}</em></p>
        <p class="card-text">Orario di arrivo:<em> {{$fantasyTrain->departure_time}}</em></p>
        <p class="card-text">Compagnia:<em> {{$fantasyTrain->agency}}</em></p>
        <p class="card-text">Numero di carrozze:<em> {{$fantasyTrain->n_carriages}}</em></p>
        <p class="card-text"> Treno:  <em>{{$fantasyTrain->code_train}}</em></p>


        <a href="#" class="btn btn-success">Buy Ticket</a>
        <a href="{{route('guest.fantasy-trains.index')}}" class="btn btn-info">Torna alla lista di tutti i treni di oggi</a>
    </div>
</div>

@endsection
