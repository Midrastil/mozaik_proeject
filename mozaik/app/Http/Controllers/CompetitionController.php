<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function newCompetition(Request $request){
        $newCompetition = new Competition();
        $newCompetition->name = $request->compName;
        $newCompetition->year = $request->compYear;
        $newCompetition->winner = $request->compWinner;
        $newCompetition->save();

        return view('Competitions', ['competitions' => Competition::all()]);
    }

    public function competitions(Request $request){
        return view('Competitions', ['competitions' => Competition::all()]);
    }
}
