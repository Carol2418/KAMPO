<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=product::all();
        return  view('Products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=product::create([
            'name'=>$request ->input('name'),
            'type'=>$request ->input('type'),
            'expiration_date'=>$request ->input('expiration_date'),
            'quantity_units'=>$request ->input('quantity_units') ,
            'minimum_value' =>$request ->input('minimum_value'),
            'image'=>$request ->input('image'),
            'packaging'=>$request ->input('packaging'),
            'unit_value' =>$request ->input('unit_value'),
            'farmers_id' =>$request ->input('farmers_id'),
        ]);
        return redirect()->route('Products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=product::find($id);
        return  view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=product::find($id);
        return  view('Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=product::update([
            'name'=>$request ->input('name'),
            'type'=>$request ->input('type'),
            'expiration_date'=>$request ->input('expiration_date'),
            'quantity_units'=>$request ->input('quantity_units') ,
            'minimum_value' =>$request ->input('minimum_value'),
            'image'=>$request ->input('image'),
            'packaging'=>$request ->input('packaging'),
            'unit_value' =>$request ->input('unit_value'),
            'farmers_id' =>$request ->input('farmers_id'),
        ]);
        return redirect()->route('Products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id)->delete();
        return redirect()->route('Products.index');
    }
}
