<?php

namespace App\Http\Controllers;

use App\Models\SubCompetition;
use Illuminate\Http\Request;

class DashboardAdminSubCompetitionController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('dashboard-admin.competition.create');
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
        return redirect('/dashboard/competition')->with('status', 'New competition successfully created');
    }

    public function show($id)
    {
        return view('dashboard-admin.competition.show', [
            'subCompetition' => SubCompetition::find($id)
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
        return redirect('/dashboard/competition')->with('status', 'Gelombang successfully updated');
    }

    public function destroy($id)
    {
        $sc = SubCompetition::find($id);
        $sc->delete();
        return redirect('/dashboard/competition')->with('status', 'Competition has been deleted!');
    }
}
