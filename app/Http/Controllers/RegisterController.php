<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index', [
            'title' => 'Register | ACMI 2022',
            'active' => 'register',
            'judul'=>'register'
        ]);
    }

    public function store(Request $request)
    {
        $new = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required'
        ]);

        $new['password'] = bcrypt($new['password']);

        User::create($new);
        $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
