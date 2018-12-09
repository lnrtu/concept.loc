<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tm;
use Illuminate\Http\Request;

class TmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tms = Tm::all()->sortBy('name');
        return view('admin.tms.index')->with('tms', $tms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tm = new Tm();
        $tm->fill($request->all());
        $tm->translit = str_slug($tm->name,'_');
        $tm->save();
        return redirect()->route('admin.tms.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tm  $tm
     * @return \Illuminate\Http\Response
     */
    public function show(Tm $tm)
    {
        dd('show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tm  $tm
     * @return \Illuminate\Http\Response
     */
    public function edit(Tm $tm)
    {
        return view('admin.tms.edit')->with('tm', $tm);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tm  $tm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tm $tm)
    {
        $tm->fill($request->all());
        $tm->save();
        return redirect()->route('admin.tms.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tm  $tm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tm $tm)
    {
        $tm->delete();
        return redirect()->route('admin.tms.index');

    }
}
