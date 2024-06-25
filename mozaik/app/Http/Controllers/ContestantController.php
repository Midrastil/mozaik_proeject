<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    public function openNewContestant(){
        return view('NewContestant');
    }
    public function newContestant(request $request){
        $contestant = new Contestant();
        $contestant->name = $request->input('compName');
        $contestant->number = $request->input('number');
        $contestant->age = $request->input('age');
        $contestant->save();
        return view('welcome');
    }

    public function contestants(Request $request){
        $roundID = $request->input('roundID');
        return view('ConnectRoundToContestant', ['contestants' => Contestant::all()], compact('roundID'));
    }
}
