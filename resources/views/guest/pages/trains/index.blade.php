@extends('layouts.app')

@section('title-page', 'Lista Treni')

@section('main-content')



@foreach ($trains as $train )
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Treno per: {{$train->arrival_station}}</h5>
        <p class="card-text">In partenza da: {{$train->departure_station}} </p>
        <p class="card-text">Orario: {{$train->departure_time}} </p>
        <a href="{{route('guest.train.show', $train->id)}}" class="btn btn-primary">Vedi dettagli</a>
    </div>
</div>
@endforeach

<button class="mt-5">
    <a class="btn btn-primary" href="{{route('guest.home')}}">Torna alla Home</a>
</button>
@endsection
