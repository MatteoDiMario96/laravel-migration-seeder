@extends('layouts.app')

@section('title-page', 'Lista Treni')

@section('main-content')



@foreach ($fantasyTrains as $fantaTrain)
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Treno per: {{$fantaTrain->arrival_station}}</h5>
        <p class="card-text">In partenza da: {{$fantaTrain->departure_station}} </p>
        <p class="card-text">Tratto dal manga/anime:  {{$fantaTrain->manga_anime}} </p>
        <a href="{{route('guest.fantasy-train.show', $fantaTrain->id)}}" class="btn btn-success">Vedi dettagli</a>
    </div>
</div>
@endforeach


<a class="btn btn-info m-4" href="{{route('guest.home')}}">Torna alla Home</a>

@endsection
