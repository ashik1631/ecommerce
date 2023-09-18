<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::with('cate')->paginate(20);
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::whereStatus('1')->get();
        return view('backend.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cate_id' => 'required',
            'name' => 'required',
            'slug' => 'nullable',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg',
            'multiple_image.*' => 'required|mimes:png,jpg,jpeg',
        ]);
        try {
            $data = $request->all();

            //image upload...
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $photoName = time() . strtolower(Str::random(10)) . '.' . $extension;
            $file->move(public_path('uploads/product/'), $photoName);
            $data['thumbnail'] = 'uploads/product/' . $photoName;
            //image upload end

            //Multi-image upload...
            $images = [];
            foreach ($request['multiple_image'] as  $image) {
                $multi_img_ext = $image->getClientOriginalExtension();
                $multi_img_name = time() . strtolower(Str::random(10)) . '.' . $multi_img_ext;
                $image->move(public_path('uploads/product/'), $multi_img_name);
                $images[] = 'uploads/product/' . $multi_img_name;
            }
            //Multi image upload end
            $data['multiple_image'] = json_encode('$images');
            $data['slug'] = Str::slug($data['name']);
            Product::create($data);
            //Message....

            Session::flash('type', 'success');
            Session::flash('message', 'success');

            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
