<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class sliderController extends Controller
{
   public function index(){
    $slider=Slider::get();
    return view('backend.Slider.index', compact('slider'));
   }
   public function create(){
    return view('backend.slider.create');
   }
   public function store(Request $request){

    $request->validate([

        'title'=>'required',
        'link'=>'nullable|url',
        'status'=>'nullable',
        'image'=>'required|mimes:png,jpg,jpeg',
    ]);

    try {
        $data = $request -> all();

        //image upload...
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $photoName = time().'.'. $extension;
        $file->move(public_path('uploads/slider/'),$photoName);
        $data['image']= $photoName;
        //image uploadend

        Slider:: create($data);
        //Message....
        /*
        Session::flash('message','success');
        Session::flash('message', 'Not-success');
          */

        return redirect()->back();
    } catch (\Throwable $th) {
        //throw $th;
    }
   }
}
