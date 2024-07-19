<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\FantasyTrain;
use Illuminate\Http\Request;

class FantasyTrainController extends Controller
{
    public function index(){

        $fantasyTrains = FantasyTrain::all();

        return view('guest.pages.fantasy_trains.index', compact('fantasyTrains'));
    }

    public function show($id){

        $fantasyTrain = FantasyTrain::findOrfail($id);

        return view('guest.pages.fantasy_trains.show', compact('fantasyTrain'));
    }
}
