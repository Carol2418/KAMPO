<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return  view('Users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user = User::create([
           'name' => $request->input('name'),
           'document_type'=> $request->input('document_type'),
           'document_number'=> $request->input('document_number'),
           'full_name'=> $request->input('full_name') ,
           'city'=> $request->input('city') ,
           'state' => $request->input('state'),
           'address'=> $request->input('address'),
           'age'=> $request->input('age') ,
           'gender'=> $request->input('gender'),
           'phone' => $request->input('phone'),
           'email'=> $request->input('email') ,
           'password'=> $request->input('password'),
       ]);
       return redirect()->route('Users.index')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return  view('Users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Users.edit', compact('user'));
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
        $user = User::find($id)->update ([
            'name' => $request->input('name'),
            'document_type'=> $request->input('document_type'),
            'document_number'=> $request->input('document_number'),
            'full_name'=> $request->input('full_name') ,
            'city'=> $request->input('city') ,
            'state' => $request->input('state'),
            'address'=> $request->input('address'),
            'age'=> $request->input('age') ,
            'gender'=> $request->input('gender'),
            'phone' => $request->input('phone'),
            'email'=> $request->input('email') ,
            'password'=> $request->input('password')
        ]);
        return redirect()->route('Users.index')->with('success','Se modifico el usuario correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User:: find($id)->delete();
        return redirect()->route('Users.index')->with('success','El usuario fue eliminado correctamente');;
    }
}
