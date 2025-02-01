<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Dashboard
    function dashboard()
    {
        return view('backend.welcomeInventory');
    }

    //Register view and register user
    function register()
    {
        return view('authentication.registration');
    }

     //Login view
     function login(Request $request)
     {
         return view('authentication.login');
     }



    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            // Flash success message
            return redirect()->route('login')->with('success', 'You have successfully signed up!');
        } catch (\Exception $e) {
            // Flash error message
            return redirect()->back()->with('error', 'Registration failed: ' . $e->getMessage());
        }
    }

    function signIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard')->with('success',"Congratuons! you are logged in now.");
        }
        else{   
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        // dd($request->all());
        
    }

    function logout()
    {
        Auth::logout();
    
        return redirect('/login')->with('logout',"You have successfully logged out!"); // Redirect to login or home page
    }

   
}
