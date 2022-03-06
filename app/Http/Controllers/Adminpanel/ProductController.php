<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('industry', 'creator')->orderby('id', 'desc')->get();
        return view('adminpanel.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = Industry::all();
        return view('adminpanel.pages.product.create', compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'name' => 'string|required',
            'style' => 'string',
            'description' => 'string',
            'image1' => 'file|required',
            'image2' => 'file|required',
            'image3' => 'file|required',
            'image4' => 'file|required',
            'image5' => 'file|required',
            'industry_id' => 'exists:industries,id',

        ]);

        $input = $request->input();

        if ($request->hasFile('image1')) {
            $path = $request->file('image1')->store('public/images/products');
            $input['image1'] = $path;
        }

        if ($request->hasFile('image2')) {
            $path = $request->file('image2')->store('public/images/products');
            $input['image2'] = $path;
        }

        if ($request->hasFile('image3')) {
            $path = $request->file('image3')->store('public/images/products');
            $input['image3'] = $path;
        }

        if ($request->hasFile('image4')) {
            $path = $request->file('image4')->store('public/images/products');
            $input['image4'] = $path;
        }

        if ($request->hasFile('image5')) {
            $path = $request->file('image5')->store('public/images/products');
            $input['image5'] = $path;
        }

        $input['admin_id'] = 1;
        $input['slug'] = Str::slug($request->name);

        Product::create($input);

        return redirect()->route('admin.product.index')->with('success', 'Created Successfuly !');
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
        $industries = Industry::all();
        $product = Product::findOrFail($product->id);
        return view('adminpanel.pages.product.edit', compact('industries', 'product'));
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
        //return $request->all();
        $this->validate($request, [
            'name' => 'string|required',
            'style' => 'string',
            'description' => 'string',
            'image1' => 'file',
            'image2' => 'file',
            'image3' => 'file',
            'image4' => 'file',
            'image5' => 'file',
            'industry_id' => 'exists:industries,id',

        ]);

        $input = $request->except(['_token', '_method']);

        if ($request->hasFile('image1')) {
            $path = $request->file('image1')->store('public/images/products');
            $input['image1'] = $path;
        }

        if ($request->hasFile('image2')) {
            $path = $request->file('image2')->store('public/images/products');
            $input['image2'] = $path;
        }

        if ($request->hasFile('image3')) {
            $path = $request->file('image3')->store('public/images/products');
            $input['image3'] = $path;
        }

        if ($request->hasFile('image4')) {
            $path = $request->file('image4')->store('public/images/products');
            $input['image4'] = $path;
        }

        if ($request->hasFile('image5')) {
            $path = $request->file('image5')->store('public/images/products');
            $input['image5'] = $path;
        }

        $input['slug'] = Str::slug($request->name);

        Product::where('id', $product->id)->update($input);
        // $product = Product::findOrFail($product->id);
        // $product->save($input);

        return redirect()->route('admin.product.index')->with('success', 'Created Successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Deleted Successfully !']);
        }

        return response()->json(['error' => 'Error while deleting !']);
    }
}
