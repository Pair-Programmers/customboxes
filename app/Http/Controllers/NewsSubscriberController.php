<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscription;
use App\Models\NewsSubscriber;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class NewsSubscriberController extends Controller
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
        $validator = FacadesValidator::make($request->all(), [
            'email' => 'email|unique:news_subscribers|required|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }

        $done = NewsSubscriber::create(['email'=>$request->input('email')]);
        if($done){
            Mail::to($request->email)->queue(new NewsletterSubscription());
        }
        return response()->json(['message'=>'Subsribed Successfully !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsSubscriber  $newsSubscriber
     * @return \Illuminate\Http\Response
     */
    public function show(NewsSubscriber $newsSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsSubscriber  $newsSubscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsSubscriber $newsSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsSubscriber  $newsSubscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsSubscriber $newsSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsSubscriber  $newsSubscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsSubscriber $newsSubscriber)
    {
        //
    }
}
