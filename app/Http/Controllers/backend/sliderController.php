<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        Session::flash('type','success');
        Session::flash('message', 'success');


        return redirect()->back();
    } catch (\Throwable $th) {
        //throw $th;
    }
   }

   public function edit($id){
    $slider=Slider::findOrFail($id);
    return view('backend.Slider.edit',compact('slider'));
   }

   public function update(Request $request,$id){

    $request->validate([

        'title'=>'required',
        'link'=>'nullable|url',
    ]);

    $slider=Slider::findOrFail($id);
    $slider->title = $request->title;
    $slider->link = $request->link;
    $slider->update();
    Session::flash('type','success');
    Session::flash('message', 'success');
    return redirect()->back();

/*in one line code forupdate;
Slider::findOrFail($id)->update($request->all());
*/
   }
   public function delete($id){
    Slider::findOrFail($id)->delete();
    Session::flash('message', 'data delete success');
    return redirect()->back();
   }
}
