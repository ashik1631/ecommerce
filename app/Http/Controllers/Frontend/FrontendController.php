<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
        $cart = Session:: has('cart') ? session ('cart') : [];
        if (array_key_exists($id, $cart)) {
           $cart[$id]['qty']+=1;
        } else {
            $cart [$id]=[
                'id' => $product->id,
                'qty' =>1,
                'name' => $product->name,
                'thumb' => $product->thumbnail,
                'price' => $product->price,
                'discount' => $product->discount,
            ];
        }
        Session::put('cart', $cart);
        Toastr::success('add-to-cart', 'Success');
        return redirect()->back();

    }
    public function cartRemove($id){

        $cart = Session:: has('cart') ? session ('cart') : [];
        unset($cart[$id]);
        Session::put('cart', $cart);
        Toastr::success('product remove from cart', 'Success');
        return redirect()->back();
    }
    public function checkout(){
        return view('Frontend.checkout');
    }

    public function contact(){
        return view('Frontend.contact');
    }
    public function about(){
        return view('Frontend.about');
    }

}
