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
        $input = Product::all();
        return view('products.index', compact('input'));
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

        $product = new Product;

        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->description = $request->description;
        $product->product_type = $request->product_type;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $total = $request->price * $request->quantity;

//18% gst
        $gst = $total * (18 / 100);
        $gsttotal = $total + $gst;
        $product->total = $gsttotal;

        //handling hobby
        $hobby = implode(',', $request->hobby);
        $product->hobby = $hobby;

        $product->save();

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $data = Product::find($product->id);
        return view('products.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = Product::find($product->id);
        return view('products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {

        $product = Product::find($product);

        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->description = $request->description;

        $product->product_type = $request->product_type;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $total = $request->price * $request->quantity;

//18% gst
        $gst = $total * (18 / 100);
        $gsttotal = $total + $gst;
        $product->total = $gsttotal;

        //handling hobby
        $hobby = implode(',', $request->hobby);
        $product->hobby = $hobby;

        $product->update();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $delete = Product::find($product);
        $delete->delete();
        return redirect('product');
    }
}
