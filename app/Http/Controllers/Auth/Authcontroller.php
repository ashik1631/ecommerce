<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('Frontend.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('Frontend.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',

        ]);
        $data = $request->all();
        $data['role']= 1;
        $data ['password'] = Hash::make($request->password);
        User::create($data);
        Toastr::success('Register', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function logins(Request $request)
    {
        $request->validate([

            'email'=>'required|email|unique:users,email',
            'password'=>'required',

        ]);

        $creadential = $request->only('email','password');
        if (Auth::attempt($creadential)) {
            if (Auth::user()->role===0) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('profiles');
        }

        Toastr::warning('No user find', 'Need registation fast');
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function profiles()
    {
        return view('Frontend.user.profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function logout()
    {
        Auth::logout();
        Toastr::success('Logout', 'Success');
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
