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
        $users = Aventura::find($id)->load('users');
       /* $users    = User::whereHas('aventuras', function($q) {
                            $q->where('id', $id);
                     })->get();*/
        return datatables()->of($users->users)
         ->addColumn('action', function ($user) {
                return '<a href="#" onclick="delete_user_aventura('.$user->id.')" class="btn btn-simple btn-danger btn-icon remove-item"><i class="material-icons">close</i></a>';
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
        $user = User::findOrFail($id);
        $user->aventuras()->detach();
        return response()->json([
            'success' => true,
            "message" => "El aventurero ha sido eliminado !"
        ]);
    }
}
