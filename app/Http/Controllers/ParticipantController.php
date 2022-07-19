<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\SubCompetition;
use App\Models\Competition;
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
        $subCompetitions = SubCompetition::where('competition_id',$id)->get();
        $competition = Competition::where('id',$id)->get();
        $visibility=false;
        $gelombang=null;
        foreach ($subCompetitions as $subCompetition)
        {
            if(date('Y-m-d') >= $subCompetition->open_registration && date('Y-m-d') <= $subCompetition->close_registration)
            {
                $gelombang = $subCompetition;
                $visibility=true;
            }
        }
        if ($visibility) {
                return view('competition.create', [
                "judul" => "Competition | ACMI 2022",
                'user' => auth()->user(),
                'subCompetition' => $gelombang,
                'competition'=> $competition[0]
            ]);
        } else {
            return view('competition.close', [
                "judul" => "Competition | ACMI 2022"
            ]);
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
        $validatedData = $request->validate([
            'nama_ketua'=>'required',
            'univ_ketua'=>'required',
            'nim_ketua'=>'required',
            'bukti_pembayaran'=>'file',
            'ktm'=>'file',
            'follow_acmi'=>'file',
            'follow_ukmki'=>'file',
            'follow_kastrat'=>'file',
            'twibbon'=>'file'
        ]);

        $participant = $request->only([
            'sub_competition_id','user_id','nama_ketua','univ_ketua','nim_ketua',
            'nama_anggota1','univ_anggota1','nim_anggota1','nama_anggota2','univ_anggota2','nim_anggota2'
        ]);
        $participant['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran');
        $participant['ktm'] = $request->file('ktm')->store('ktm');
        $participant['follow_acmi'] = $request->file('follow_acmi')->store('follow_acmi');
        $participant['follow_ukmki'] = $request->file('follow_ukmki')->store('follow_ukmki');
        $participant['follow_kastrat'] = $request->file('follow_kastrat')->store('follow_kastrat');
        $participant['twibbon'] = $request->file('twibbon')->store('twibbon');

        $user = $request->only(['wa','address']);

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
