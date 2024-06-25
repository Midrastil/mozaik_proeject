<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function openNewRound(Request $request){
        $competitionName = $request->input('compName');
        $competitionYear = $request->input('compYear');
        return view('NewRound', compact('competitionName','competitionYear'));
    }

    public function newRound(Request $request){
        $round = new Round();
        $round->name = $request->input('roundName');
        $round->maxContestant = $request->input('maxConts');
        $round->winner = $request->input('roundWinner');
        $round->competitionName = $request->input('compName');
        $round->competitionYear = $request->input('compYear');
        $round->save();
        return view('newCompetition');
    }

    public function rounds(){
        return view('Rounds', ['rounds' => Round::all()]);
    }
}
