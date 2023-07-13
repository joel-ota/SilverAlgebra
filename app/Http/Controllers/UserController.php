<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        

        // Hash 
        $formFields['password'] = bcrypt($formFields['password']);

        // kreacija
        $user = User::create($formFields);

        // odmah uc
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
//logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You are logged out');
    }

    //login
    public function login(){
        return view('users.login');
    }

    //authenticate
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
            if(auth()->attempt($formFields)){
                    $request->session()->regenerate();

                    return redirect('/')->with('message', 'you are logged in');
                        }
                        return back()->withErrors(['email'=> 'krivi unos'])->onlyInput('email');
      
    }
}