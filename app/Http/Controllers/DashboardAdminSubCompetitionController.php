<?php

namespace App\Http\Controllers;

use App\Models\SubCompetition;
use App\Models\Competition;
use App\Models\Participant;
use Illuminate\Http\Request;

class DashboardAdminSubCompetitionController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('dashboard-admin.competition.create',[
            'competitions'=>Competition::all()
        ]);
    }

    public function store(Request $request)
    {
        $new = $request->validate([
            'competition_id' => 'required',
            'gelombang' => 'required',
            'open_registration' => 'required',
            'close_registration' => 'required',
            'open_submission' => 'required',
            'close_submission' => 'required'
        ]);

        SubCompetition::create($new);
        return redirect('/dashboard/competition')->with('success', 'New competition successfully created');
    }

    public function show($id)
    {
        return view('dashboard-admin.competition.show', [
            'subCompetition' => SubCompetition::find($id),
            'participants' => Participant::where('sub_competition_id',$id)->get()
        ]);
    }

    public function edit($id)
    {
        return view('dashboard-admin.competition.edit', [
            'subCompetition' => SubCompetition::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $new = $request->validate([
            'competition_id' => 'required',
            'gelombang' => 'required',
            'open_registration' => 'required',
            'close_registration' => 'required',
            'open_submission' => 'required',
            'close_submission' => 'required'
        ]);

        SubCompetition::where('id', $id)->update($new);
        return redirect('/dashboard/competition')->with('success', 'Gelombang successfully updated');
    }

    public function hide($id)
    {
        SubCompetition::where('id',$id)->update(['visibility'=>false]);
        return redirect('/dashboard/competition')->with('success', 'Competition has been hidden!');
    }
}
