<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $Categorys = category::whereStatus('1')->get();
        $Sliders = Slider::whereStatus('1')->get();
        $products = product::whereStatus('1')->get();
        return view('Frontend.home', compact('Categorys', 'Sliders', 'products'));
    }
}
