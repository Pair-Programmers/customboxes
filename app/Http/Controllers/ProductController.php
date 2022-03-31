<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Industry;
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
        $industry = Industry::findOrFail(10);
        $products = Product::where('industry_id', '!=', 11)->where('is_active', true)->get();
        return view('pages.product.index', compact('industry', 'products'));
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry, Product $product)
    {

        $product = Product::findOrFail($product->id);
        $relatedProducts = Product::where('industry_id', $product->industry_id)
        ->where('id', '!=', $product->id)
        ->get()->take(5);
        $industry = Industry::findOrFail($product->industry_id);
        return view('pages.product.show', compact('product', 'relatedProducts', 'industry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function search(Request $request)
    {
        session()->flashInput($request->input());
        $products = Product::where('name', 'like', '%'. $request->keyword . '%')->get();
        return view('pages.product.search-results', compact('products'));
    }
}
