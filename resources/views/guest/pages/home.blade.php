@extends('layouts.app')

@section('title-page', 'Treni Home')

@section('main-content')
    <h1>
        Sono la  guest home
    </h1>

        <a class="btn btn-primary" href="{{route('guest.trains.index')}}">Vedi la lista di treni nazionale</a>

        <a class="btn btn-success" href="{{route('guest.fantasy-trains.index')}}">Vedi la lista treni per un mondo magico</a>

@endsection
