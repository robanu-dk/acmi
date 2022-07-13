<?php

namespace App\Http\Controllers;

use App\Models\TablighAkbar;
use App\Models\ParticipantsTa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAdminTaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.tabligh-akbar.index', [
            'ta' => TablighAkbar::all(),
            'pta' => ParticipantsTa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.tabligh-akbar.create');
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
            'judul' => 'required',
            'pemateri' => 'required',
            'open' => 'required',
            'close' => 'required',
            'foto' => 'image'
        ]);

        $new['foto'] = $request->file('foto')->store('foto-pemateri');

        TablighAkbar::create($new);
        return redirect('/dashboard/tabligh-akbar')->with('status', 'New tabligh akbar successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TablighAkbar  $tablighAkbar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard-admin.tabligh-akbar.show', [
            'ta' => TablighAkbar::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TablighAkbar  $tablighAkbar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard-admin.tabligh-akbar.edit', [
            'ta' => TablighAkbar::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TablighAkbar  $tablighAkbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = $request->validate([
            'judul' => 'required',
            'pemateri' => 'required',
            'open' => 'required',
            'close' => 'required',
            'foto' => 'image'
        ]);

        if($request->file('foto')) {
            Storage::delete($request->oldFoto);
            $new['foto'] = $request->file('foto')->store('foto-pemateri');
        }

        TablighAkbar::where('id', $id)->update($new);
        return redirect('/dashboard/tabligh-akbar')->with('status', 'New competition successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TablighAkbar  $tablighAkbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $tablighAkbar)
    {
        // Storage::delete($tablighAkbar->foto);
        // TablighAkbar::destroy($tablighAkbar->id);
        TablighAkbar::where('id',$tablighAkbar->id)->update(['terlihat' => false]);
        return redirect('/dashboard/tabligh-akbar')->with('success', 'Tabligh akbar has been hidden!');
    }
}
