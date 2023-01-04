<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$products = Product::all();
        
        // $products = Product::paginate(5);
        $products = Product::latest()->paginate(6);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateMsg = $request -> validate([
            'title' => 'required|alpha|max:50',
            'firstname' => 'nullable|alpha|min:3',
            'surname' => 'required|alpha',
            'price' => 'required|numeric',
            'pages' => 'required|numeric',
            'image' => 'required',
            'category' => 'required|in:cd,book,game',
        ],[
            'image.image' => 'Selected file must be an image.'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success','Product Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validateMsg = $request -> validate([
            'title' => 'required|alpha|max:50',
            'firstname' => 'nullable|alpha|min:3',
            'surname' => 'required|alpha',
            'price' => 'required|numeric',
            'pages' => 'required|numeric',
            'image' => 'required|image',
            'category' => 'required|in:cd,book,game',
        ],[
            'image.image' => 'Selected file must be an image.'
        ]);


        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}