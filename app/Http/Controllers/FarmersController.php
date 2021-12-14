<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Farmer;

class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmer=farmer::all();
        return  view('Farmers.index', compact('farmer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return  view('Farmers.create', compact('users'));
    }


    public function store(Request $request)
    {
        $farmer=farmer::create([
            'address'=>$request->input('address'),
            'crops'=>$request->input('crops'),
            'land_type'=> $request->input('land_type'),
            'users_id'=>$request->input('user_id'),
        ]);
        return redirect()->route('Farmers.index')->with('success','Agricultor creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmer=farmer::find($id);
        return  view('Farmers.show', compact('farmer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmer=farmer::find($id);
        $users=User:: all();
        $p=User::pluck('full_name','id');
        return  view('Farmers.edit', compact('farmer','users','p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $farmer=farmer::find($id)->update ([
            'address'=>$request->input('address'),
            'crops'=>$request->input('crops'),
            'land_type'=> $request->input('land_type'),
            'users_id'=>$request->input('user_id'),
        ]);
        return redirect()->route('Farmers.index')->with('success','Se modifico el agricultor correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $farmer=farmer::find($id)->delete();
        return redirect()->route('Farmers.index')->with('success','El agricultor fue eliminado correctamente');
    }
}
