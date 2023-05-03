<?php

namespace App\Http\Controllers;

use App\Models\Inventor;
use App\Models\Barang;
use Illuminate\Http\Request;

class InventorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventor=Inventor::with('Barang')->get();
        return view('Inventor.listinventor', compact('inventor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang=Barang::all();
        return view('Inventor.addinventor',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'noinventor'=>'required',
            'tglinventor'=>'required',
            'idbarang'=>'required',
            'jmlbarang'=>'required',
            'sumberbarang'=>'required',
            'status'=>'required'
        ]);
        Inventor::create($request->all());
        return redirect()->route('inventor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventor  $inventor
     * @return \Illuminate\Http\Response
     */
    public function show(Inventor $inventor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventor  $inventor
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventor $inventor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventor  $inventor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventor $inventor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventor  $inventor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventor $inventor)
    {
        //
    }
}
