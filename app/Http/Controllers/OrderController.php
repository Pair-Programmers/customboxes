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
            'customer_email' => 'email|required',
            'customer_phone' => 'string|required',
            'customer_note' => 'string|nullable',
            'product_id' => 'required|exists:products,id',
        ]);

         $inputs = $request->all();
        if(Auth::check()){
            $inputs['user_id'] = Auth::id();
        }

        $inputs['page_url'] = url()->previous();
        $inputs['addons'] = json_encode($request->addons);
        $order = Order::create($inputs);
        if ($request->hasFile('box_design_file')) {
            $file = $request->file('box_design_file');
            $name = 'product_design_order_'.$order->id.'.'.$file->getClientOriginalExtension();
            $file->move('/home/custlrsl/public_html'.'/storage/files', $name);
            // $path = $request->file('box_design_file')->storeAs('public/order-design-files',
            //  'product_design_order_'.$order->id.'.'. $request->file('box_design_file')->guessExtension());
             $order->box_design_file = $name;
             $order->save();
        }

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
