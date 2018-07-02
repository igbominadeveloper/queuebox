<?php

namespace App\Http\Controllers;

use App\Newspaper;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewspaperController extends Controller
{

    public function api(){
        return Newspaper::latest()->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newspapers = Newspaper::latest()->paginate(5);
        return view('newspapers.index',['page'=>'Clippings','newspapers'=>$newspapers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newpapers.create');
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
           'title' => 'required|string',
            'body' => 'required|string',
            'attachment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('attachment')) {
            $fileName = 'newspaper'.time().'.'.$request->attachment->getClientOriginalExtension();
            $request->attachment->storeAs('clippings',$fileName);
            $request->attachment = $fileName;
        }
        $newspaper = new Newspaper([
           'title' => $request->title,
            'body' => $request->body,
            'attachment' => $request->attachment
        ]);
        $newspaper->save();
        return back()->with('success','Record Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('newspapers.show',['newspaper' => Newspaper::find($id),'page' => 'clipping']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Newspaper $newspaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newspaper $newspaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newspaper $newspaper)
    {
        //
    }
}
