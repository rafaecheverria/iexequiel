<?php

namespace App\Http\Controllers;

use App\Aventura;
use App\User;
use Illuminate\Http\Request;

class UserAventuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aventuras = Aventura::find($id)->load('users');
       /* $users    = User::whereHas('aventuras', function($q) {
                            $q->where('id', $id);
                     })->get();*/

        return datatables()->of($aventuras->users)
                ->addColumn('action', function ($user) {
                return '<a href="#" onclick="loadModalAventura('.$user->id.')" data-toggle="modal" data-target="#up-aventura-modal" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">edit</i></a><a href="#" onclick="loadModalUserAventura('.$user->id.')" data-toggle="modal" data-target="#view-user-aventura-modal" class="btn btn-simple btn-success btn-icon"><i class="material-icons">group</i></a><a href="#" onclick="loadModalAddAventura('.$user->id.')" data-toggle="modal" data-target="#add-user-aventura-modal" class="btn btn-simple btn-info btn-icon"><i class="material-icons">group_add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove-item"><i class="material-icons">close</i></a>';
            })->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aventura = Aventura::findOrFail($id);
        $personas = User::orderBy('apellidos', 'DESC')->pluck('apellidos', 'id');
        $my_persona = $aventura->users->pluck('id')->ToArray();
        
        return response()->json([
            'success'    => true,
            'id'         => $aventura->id,
            'personas'   => $personas,
            'my_persona' => $my_persona
        ]);
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
        if($request->ajax()){
            $aventura = Aventura::findOrFail($id);
            $aventura->users()->sync($request->add_user_aventura);   
            return response()->json([
                "message" => "Se han agregado las personas seleccionadas a la aventura !"
                ]);
           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
