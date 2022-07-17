<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\SubCompetition;
use App\Models\Participant;
use Illuminate\Http\Request;

class DashboardAdminCompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.competition.index', [
            'subCompetitions' => SubCompetition::all(),
            'competitions' => Competition::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.competition.createCompetition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = $request->validate([
            'name'=>'required',
            'year'=>'required|size:4',
            'group_link'=>'required',
            'description'=>'required'
        ]);

        Competition::create($new);
        return redirect('/dashboard/competition')->with('success', 'Competition successfully created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subCompetitions = SubCompetition::where('competition_id',$id)->get();
        $totalPartisipant = 0;
        foreach($subCompetitions as $subCompetition){
            $totalPartisipant+= Participant::where('sub_competition_id',$subCompetition->id)->count();
        }
        return view('dashboard-admin.competition.showc', [
            'competition' => Competition::find($id),
            'total' => $totalPartisipant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard-admin.competition.editc', [
            'competition' => Competition::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = $request->validate([
            'name'=>'required',
            'year'=>'required|size:4',
            'group_link'=>'required',
            'description'=>'required'
        ]);

        Competition::where('id', $id)->update($new);
        return redirect('/dashboard/competition')->with('success', 'Competition successfully updated');
    }

    /**
     * Change status competition to be hidden
     */
    public function hide($id)
    {
        Competition::where('id',$id)->update(['visibility'=>false]);

        return redirect('/dashboard/competition')->with('success', 'Competition has been hidden!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        //
    }
}
