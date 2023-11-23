<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

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
            'email'=>'required|email',
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
