<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    public function participate(Request $request){
        $participate = new Participate();
        $participate->roundID = $request->input('roundID');
        $participate->contestantID  = $request->input('contID');
        $participates = Participate::all();
        $presentInDB = 0;
        foreach($participates as $p){
            if($p->contestantID != $participate->contestantID && $p->roundID != $participate->roundID){
                $participate->save();
            }else{
                $presentInDB +=1;
            }
        }
        $roundID = $request->input('roundID');
        return view('ConnectRoundToContestant', ['contestants' => Contestant::all()], compact('roundID', 'presentInDB'));
    }

    public function delete(Request $request)
    {

        $participate = Participate::find($request->input('id'));

        $participate->delete();

        return view('deleteParticipate', ['participates' => Participate::all()]);
    }


    public function opendeleteParticipate(){
        return view('deleteParticipate', ['participates' => Participate::all()]);
    }
}
