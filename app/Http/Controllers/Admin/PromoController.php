<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index()
    {
        $promos = Promo::all()->sortByDesc('id');
        return view('admin.promos.index')->with('promos', $promos);
    }


    public function create()
    {
        $promo = new Promo();
        $promo->promocode = '';
        $promo->save();
        return redirect()->route('admin.promos.index');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Promo $promo)
    {
        //
    }

    public function edit(Promo $promo)
    {
        //
    }


    public function update(Request $request, Promo $promo)
    {
        if($request->delete){
            $this->destroy($promo);
        }else{
            $promo->fill($request->all([
                'promocode', 'promodiscount', 'promotext'
            ]));
            $promo->save();
        }
        return redirect()->route('admin.promos.index');
    }


    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('admin.promos.index');
    }
}
