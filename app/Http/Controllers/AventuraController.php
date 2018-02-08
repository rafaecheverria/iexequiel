<?php

namespace App\Http\Controllers;

use App\Aventura;
use App\User;
use Illuminate\Http\Request;

class AventuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = User::all();
        return view("aventuras.index", compact("personas"));
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
        if($request->ajax()){
            $aventura = new Aventura($request->all());
            $aventura->estado = "pendiente";
            $aventura->save();
            return response()->json([
                "message" => "La aventura ha sido agregada exitosamente !"
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $aventuras = Aventura::select(['id','nombre','fecha','estado'])->where('estado', 'pendiente');

        return datatables()->of($aventuras)
                ->addColumn('action', function ($aventura) {
                return '<a href="#" onclick="loadModalAventura('.$aventura->id.')" data-toggle="modal" data-target="#up-aventura-modal" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">edit</i></a><a href="#" onclick="loadModalUserAventura('.$aventura->id.')" data-toggle="modal" data-target="#view-user-aventura-modal" class="btn btn-simple btn-success btn-icon"><i class="material-icons">group</i></a><a href="#" onclick="loadModalAddAventura('.$aventura->id.')" data-toggle="modal" data-target="#add-user-aventura-modal" class="btn btn-simple btn-info btn-icon"><i class="material-icons">group_add</i></a><a href="#" onclick="delete_aventura('.$aventura->id.')" class="btn btn-simple btn-danger btn-icon remove-item"><i class="material-icons">close</i></a>';
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
        return response()->json([
            'success'      => true,
            'id'           => $aventura->id,
            'fecha'        => $aventura->fecha,
            'nombre'       => $aventura->nombre,
            'estado'       => $aventura->estado,
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
            $aventura->fill($request->all());
            $aventura->save();
            return response()->json([
                "message" => "La aventura ha sido modificada exitosamente !"
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
        $aventura = Aventura::findOrFail($id);
        Aventura::destroy($id);
        return response()->json([
            'success' => true,
            "message" => "La aventura se ha eliminado exitosamente !"
        ]);
    }
}
