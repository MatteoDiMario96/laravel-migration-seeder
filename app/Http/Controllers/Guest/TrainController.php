<?php

namespace App\Http\Controllers\Guest;

use App\Models\Guest\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{


    public function index(){

        $trains = Train::all();

        return view('guest.pages.trains.index', compact('trains'));
    }

    public function show($id){

        $train = Train::findOrfail($id);

        return view('guest.pages.trains.show', compact('train'));
    }
}
