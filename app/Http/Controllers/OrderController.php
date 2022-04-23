<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //return $request->all();
        $this->validate($request, [
            'height' => 'integer|required',
            'width' => 'integer|required',
            'depth' => 'integer|required',
            'unit' => 'string|required',
            'material' => 'string|required',
            'color' => 'string|required',
            'qty_1' => 'integer|required',
            'qty_2' => 'integer|nullable',
            'addons' => 'nullable',
            'box_design_file' => 'file|nullable',
            'customer_name' => 'string|required',
            'customer_email' => 'string|required',
            'customer_phone' => 'string|nullable',
            'customer_note' => 'string|nullable',
            'product_id' => 'required|exists:products,id',
        ]);

         $inputs = $request->all();
        if(Auth::check()){
            $inputs['user_id'] = Auth::id();
        }
        if ($request->hasFile('box_design_file')) {
            $path = $request->file('box_design_file')->store('files');
            $inputs['box_design_file'] = $path;
        }
        $inputs['page_url'] = url()->previous();
        $inputs['addons'] = json_encode($request->addons);
        $order = Order::create($inputs);
        Mail::to($request->customer_email)->queue(new OrderPlaced());
        Mail::to('sales@customboxesus.com')->cc('info@customboxesus.com')->queue(new NewOrder($order));
        return redirect()->back()->with(['success'=>"We Have recieved your Qoutation, we'll contact you soon !"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
