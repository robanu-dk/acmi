<?php

namespace App\Http\Controllers;

use App\Models\ParticipantsTa;
use App\Models\TablighAkbar;
use Illuminate\Http\Request;

class ParticipantTaController extends Controller
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
        return view('tabligh-akbar.create', [
            'judul'=>'Tabligh Akbar | ACMI 2022',
            'ta' => TablighAkbar::find($id),
            'user' => auth()->user()
        ]);
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
            'tabligh_akbar_id' => 'required',
            'user_id' => 'required'
        ]);

        ParticipantsTa::create($new);
        return view('tabligh-akbar.registered', [
            "judul" => "Tabligh Akbar | ACMI 2022"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantsTa  $participantsTa
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantsTa $participantsTa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantsTa  $participantsTa
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantsTa $participantsTa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParticipantsTa  $participantsTa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipantsTa $participantsTa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantsTa  $participantsTa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantsTa $participantsTa)
    {
        //
    }
}
