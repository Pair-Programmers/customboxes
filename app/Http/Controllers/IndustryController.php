<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Product;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        $industry = Industry::findOrFail($industry->id);
        $products = Product::where('industry_id', $industry->id)->where('is_active', true)->get();
        return view('pages.industry', compact('industry', 'products'));
    }

    public function showCustomPrintedBoxes()
    {
        $industry = Industry::findOrFail(10);
        $products = Product::where('industry_id', $industry->id)->where('is_active', true)->get();
        return view('pages.custoom-printed-boxes', compact('industry', 'products'));
    }

    public function showBoxesStyles()
    {
        $industry = Industry::findOrFail(11);
        $products = Product::where('industry_id', $industry->id)->where('is_active', true)->get();
        return view('pages.boxes-styles', compact('industry', 'products'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industry $industry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        //
    }
}
