<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|min:6|max:255|unique:users',
            'username' => 'required|min:8|max:15|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:50',
        ]);

        //Enkripsi
        // $validatedData['password'] = bcrypt($validatedData['password']);

        //atau
        $validatedData['password'] = Hash::make($validatedData['password']);

        //Store a new user to the database
        User::create($validatedData);

        // $request->session()->flash('success', 'Account has been successfully created!');

        return redirect('/login')->with('success', 'Account has been successfully created!');
    }
}
