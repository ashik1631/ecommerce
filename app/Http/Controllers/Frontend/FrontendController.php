<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;

class FrontendController extends Controller
{
    public function index()
    {
        $Categorys = category::whereStatus('1')->get();
        $Sliders = Slider::whereStatus('1')->get();
        $products = product::whereStatus('1')->latest()->limit(20)->get();
        return view('Frontend.home', compact('Categorys', 'Sliders', 'products'));
    }

    public function addToCart($id)
    {
        $product = product :: findorfail($id);
        $cart = Session :: has('cart') ? session ('cart') : [];
        $cart []=[
            'id' => $product->id,
            'qty' =>1,
            'name' => $product->name,
            'thumb' => $product->thumbnail,
            'price' => $product->price,
            'discount' => $product->discount,
        ];

        Session::put('cart', $cart);
        Toastr::success('Add to cart', 'Success');
        return redirect()->back();

    }
}
