<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Novost;
use Illuminate\Http\Request;

class NovostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novosts = Novost::all()->sortByDesc("data");
        return view('admin.novosts.index')->with('novosts', $novosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.novosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novost = new Novost();
        $novost->fill($request->all())->save();
        return redirect()->route('admin.novosts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novost  $novost
     * @return \Illuminate\Http\Response
     */
    public function show(Novost $novost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novost  $novost
     * @return \Illuminate\Http\Response
     */
    public function edit(Novost $novost)
    {
        return view('admin.novosts.edit')->with('novost', $novost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novost  $novost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novost $novost)
    {
        $novost->fill($request->all());
        $novost->save();
        return redirect()->route('admin.novosts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novost  $novost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novost $novost)
    {
        $novost->delete();
        return redirect()->route('admin.novosts.index');
    }
}
