<?php

namespace App\Http\Controllers;

use App\Twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function api(){
        return Twitter::latest()->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Twitter::latest()->get();
        return view('tweets.index',['page'=>'Tweets','tweets'=> $tweets]);
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
        $this->validate($request,[
            'url' => 'required|string'
        ]);
        Twitter::create($request->all());
        return back()->with('success','Record Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function show(Twitter $twitter)
    {
        return view('twitter.show',['twitter' => $twitter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function edit(Twitter $twitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twitter $twitter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twitter $twitter)
    {
        //
    }
}
