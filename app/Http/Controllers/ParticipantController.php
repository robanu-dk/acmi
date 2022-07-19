<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\SubCompetition;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        foreach (SubCompetition::all() as $subc) {
            if ($subc->competition->id == $id && $subc->visibility == true && $subc->open_registration <= date('Y-m-d') && $subc->close_registration >= date('Y-m-d')) {
                    return view('competition.create', [
                    "judul" => "Competition | ACMI 2022",
                    'user' => auth()->user(),
                    'subCompetition' => $subc
                ]);
            } else {
                return view('competition.close', [
                    "judul" => "Competition | ACMI 2022"
                ]);
            }
        }    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participant = $request->validate([
            'user_id' => 'required',
            'sub_competition_id' => 'required',
            'univ' => 'required',
            'nim' => 'required',
            'syarat' => 'required',
        ]);

        $user = $request->validate([
            'name' => 'required',
            'wa' => 'required',
            'address' => 'required'
        ]);

        Participant::create($participant);
        User::where('id', $request['user_id'])->update($user);
        return view('competition.registered', [
            "judul" => "Competition | ACMI 2022"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
