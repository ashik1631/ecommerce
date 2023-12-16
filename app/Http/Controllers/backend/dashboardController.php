<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $category = category::count();
        $product = product:: count();
        $order_process = order:: where('order_status','processing')->count();
        $order_delivery = order:: where('order_status','delivery')->count();
        $order_cancel = order:: where('order_status','cancel')->count();
        $user = User::count();
        return view('backend.dashboard' , compact('category', 'product','order_process','order_cancel','order_delivery','user'));
    }
}
