<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    } 

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3','max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:10'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
    // $validateData['password'] = Hash::make($validateData['password']);
    User::create($validateData);
    
    // $request->session()->flash('succes', 'Anda Berhasil Mebuat Akun');
    
    return redirect('/login')->with('succes', 'Anda Berhasil Mebuat Akun');
    }
}
