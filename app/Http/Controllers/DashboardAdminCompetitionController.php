<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\SubCompetition;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard-admin.competition.showc', [
            'competition' => Competition::find($id)
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
            'name' => 'required',
            'description' => 'required'
        ]);

        Competition::where('id', $id)->update($new);
        return redirect('/dashboard/competition')->with('status', 'Competition successfully updated');
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
