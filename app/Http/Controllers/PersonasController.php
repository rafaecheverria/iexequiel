<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("personas.index");
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
    public function show()
    {
        $users = User::select(['id', 'rut','nombres','apellidos', 'nacimiento', 'questions_id'])->where('estado', 'Pendiente');

        return datatables()->of($users)
                ->editColumn('nacimiento', function ($user) {
                return $user->getYearsAttribute();
                })
                ->addColumn('action', function ($user) {
                return '<a href="#" onclick="loadModalUser('.$user->id.')" data-toggle="modal" data-target="#up-persona-modal" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">edit</i></a>
                        <a href="#" onclick="loadEncuestaUser('.$user->questions_id.')" data-toggle="modal" data-target="#up-encuesta-modal" class="btn btn-simple btn-success btn-icon"><i class="material-icons">description</i></a>
                        <a href="#" onclick="eliminar_doc('.$user->id.')" class="btn btn-simple btn-danger btn-icon remove-item"><i class="material-icons">close</i></a>';
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
        $persona = User::findOrFail($id);      
        return response()->json([
            'success'       => true,
            'rut'           => $persona->rut,
            'id'            => $persona->id,
            'nombres'       => $persona->nombres,
            'apellidos'     => $persona->apellidos,
            'email'         => $persona->email,
            'peso'          => $persona->peso,
            'telefono'      => $persona->telefono,
            'nacimiento'    => $persona->nacimiento,
            'nacionalidad'  => $persona->nacionalidad,
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
            $user = User::findOrFail($id);
            $user->fill($request->all());
            $user->save();
            return response()->json([
                "message" => "Los datos del aventurero han sido modicados con éxito !"
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
