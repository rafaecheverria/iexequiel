<?php

namespace App\Http\Controllers;

use App\Aventura;
use App\User;
use Illuminate\Http\Request;

class HistorialAventuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("historial.index");
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
        $aventuras = Aventura::select(['id','nombre','fecha','estado'])->where('estado', 'ejecutado');

        return datatables()->of($aventuras)
                ->addColumn('action', function ($aventura) {
                return '<a href="#" onclick="loadModalAventura('.$aventura->id.')" data-toggle="modal" data-target="#up-aventura-modal" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">edit</i></a><a href="#" onclick="loadModalUserAventura('.$aventura->id.')" data-toggle="modal" data-target="#view-user-aventura-modal" class="btn btn-simple btn-success btn-icon"><i class="material-icons">group</i></a>';
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
        //
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
        //
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
