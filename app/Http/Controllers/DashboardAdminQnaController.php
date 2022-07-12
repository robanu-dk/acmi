<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\Request;

class DashboardAdminQnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.qna.index', [
            'qnas' => Qna::all()
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
        $new = $request->validate([
            'question' => 'required'
        ]);

        Qna::create($new);
        return redirect('/qna')->with('success', 'Your question successfully submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard-admin.qna.show', [
            'qna' => Qna::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard-admin.qna.edit', [
            'qna' => Qna::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = $request->validate([
            'answer' => ''
        ]);

        Qna::where('id', $id)->update($new);
        return redirect('/dashboard/qna')->with('status', 'QnA successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qna $qna)
    {
        //
    }
}
