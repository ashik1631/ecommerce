<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=order::with('cart')->paginate(10);
        return view('backend.Admin order.index' , compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        order::findOrFail($id)->update(['order_status'=>$request->order_status]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
