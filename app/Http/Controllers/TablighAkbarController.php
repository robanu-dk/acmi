<?php

namespace App\Http\Controllers;

use App\Models\TablighAkbar;
use Illuminate\Http\Request;

class TablighAkbarController extends Controller
{
    public function index()
    {
        return view('tabligh-akbar.index', [
            'judul'=>'Tabligh Akbar | ACMI 2022',
            'tablighAkbars' => TablighAkbar::all()
        ]);
    }
}
