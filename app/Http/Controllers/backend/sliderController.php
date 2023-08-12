<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sliderController extends Controller
{
   public function index(){
    return view('backend.Slider.index');
   }
   public function create(){
    return view('backend.slider.create');
   }
}