<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //


    public function store(Request $request){
        $validateddata = $request -> validate([
            'name'=> 'required',
            'email' => 'required',
            'password' => 'required',
            're-password' => 'required'
        ]);

        User::create($validateddata);

        return redirect()->route('login')->with('success', 'Registered successfully');
    }
}
