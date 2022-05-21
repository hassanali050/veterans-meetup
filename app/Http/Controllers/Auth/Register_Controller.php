<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class Register_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $this->validate($request, [                                          
            'name' => 'required|max:255',                                 
            'profession' => 'required',                              
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed'
            ]) ;               
            
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'profession' => $request->profession,
                'password' => Hash::make($request->password)
            ]);    
            
            auth()->attempt($request->only('email', 'password') );
            return redirect()->route('dashboard');
            
    }
}
