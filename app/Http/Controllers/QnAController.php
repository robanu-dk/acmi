<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\Request;

class QnAController extends Controller
{
    public function index()
    {
        return view('qna', [
            'judul'=>'QnA | ACMI 2022',
            'qnas' => Qna::all()
        ]);
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
}
