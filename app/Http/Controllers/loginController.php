<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
   

    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        User::find($validatedData);
    
        return redirect()->route('dashboard')->with('success', 'Logged in successfully');

    }
}
