<?php

namespace App\Http\Controllers;

use App\Models\Glasse;
use Illuminate\Http\Request;

class GlasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Glasse::all();
        $glass=Glasse::get()->where('type','Sunglasses');
        return view('shop-page.index',compact('data','glass'));
    }
    public function all(){
        $data=Glasse::all();
        return view('shop-page.glasses',compact('data'));
    }
    public function about(){

        return view('shop-page.about');
    }
    public function contact(){

        return view('shop-page.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        //  if (request()->hasFile('image')) {
            $path = request()->image->store('public/images');

            $data['image'] = $path;





        //  }

        Glasse::create([
            'price' => request('price'), 'image' => $request->image->hashName(), 'type' => request('type')
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Glasse  $glasse
     * @return \Illuminate\Http\Response
     */
    public function show(Glasse $glasse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Glasse  $glasse
     * @return \Illuminate\Http\Response
     */
    public function edit(Glasse $glasse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Glasse  $glasse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Glasse $glasse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Glasse  $glasse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glasse $glasse)
    {
        //
    }
}
