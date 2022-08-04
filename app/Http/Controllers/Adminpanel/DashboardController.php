<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::files(public_path().'/storage/images/products');

        $filesNeeded = 0;
        foreach (Product::all() as $key => $product) {
            if(isset($product->image1)){
                $filesNeeded++;
            }
            if(isset($product->image2)){
                $filesNeeded++;
            }
            if(isset($product->image3)){
                $filesNeeded++;
            }
            if(isset($product->image4)){
                $filesNeeded++;
            }
            if(isset($product->image5)){
                $filesNeeded++;
            }
        }

        $totalUsers = count($files);//User::count('id');
        $totalProducts = $filesNeeded;//Product::count('id');
        $totalOdrers = Order::count('id');
        $totalBlogs = Blog::count('id');
        return view('adminpanel.pages.dashboard', compact('totalUsers', 'totalProducts', 'totalOdrers',
            'totalBlogs'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
