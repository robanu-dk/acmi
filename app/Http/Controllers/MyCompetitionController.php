<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\SubCompetition;

class MyCompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partisipans = Participant::where('user_id',auth()->user()->id)->get();
        return view('dashboard-admin.my-competition.index', [
            "judul" => "My Competition | ACMI 2022",
            'participants' => $partisipans,
            'competitions' => Competition::all(),
            'subCompetitions' => SubCompetition::all()
        ]);
    }

    /**
     * Submission
     */
    public function submission(Request $request, $id)
    {
        $validated = $request->validate(['submission'=>'required']);

        Participant::where('user_id',$id)->update(['submission'=>$request->submission]);

        return redirect('/dashboard/mycompetition')->with('success','Your Submission Successfull');

    }

}
