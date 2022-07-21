<?php

namespace App\Http\Controllers;

use App\Models\TablighAkbar;
use Illuminate\Http\Request;
use App\Models\ParticipantsTa;

class TablighAkbarController extends Controller
{
    public function index()
    {
        if(auth()->user())
        {
            $participantTa = ParticipantsTa::where('user_id',auth()->user()->id)->get();
        } else
        {
            $participantTa = null;
        }
        return view('tabligh-akbar.index', [
            'judul'=>'Tabligh Akbar | ACMI 2022',
            'tablighAkbars' => TablighAkbar::all(),
            'participantTa' => $participantTa
        ]);
    }
}
