<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function allterraincrane(){
        $products = Product::where('product_type', 'All Terrain Crane')->get();;
        return view('allterraincranes',compact('products'));
    }
    public function crawlercrane(){
        $products = Product::where('product_type', 'Crawler Crane')->get();;
        return view('crawlercranes',compact('products'));
    }
    public function roughterraincrane(){
        $products = Product::where('product_type', 'Rough Terrain Crane')->get();;
        return view('roughterraincranes',compact('products'));
    }
    public function truckcrane(){
        $products = Product::where('product_type', 'Truck Crane')->get();;
        return view('truckcranes',compact('products'));
    }
    public function index()
    {
        $products = Product::all();
        return view('products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('detailProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
