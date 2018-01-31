<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\EncuestaRequest;

class EncuestaController extends Controller
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
    public function store(EncuestaRequest $request)
    {
         if($request->ajax()){
            $e = new Question($request->all());
            $e->save();
            User::find($request->user_id)->update(['questions_id' => $e->id]);
            return response()->json([
                "message" => 'La información ha sido enviada correctamente',

                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encuesta = Question::findOrFail($id);      
        return response()->json([
            'success'   => true,
            'id'        => $encuesta->id,
            'p1'        => $encuesta->p1,
            'p2'        => $encuesta->p2,
            'p3'        => $encuesta->p3,
            'p4'        => $encuesta->p4,
            'p5'        => $encuesta->p5,
            'p6'        => $encuesta->p6,
            'p7'        => $encuesta->p7,
            'p8'        => $encuesta->p8,
            'p9'        => $encuesta->p9,
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
            $encuesta = Question::findOrFail($id);
            $encuesta->fill($request->all());
            $encuesta->save();
            return response()->json([
                "message" => "La encuesta ha sido modificada con éxito !"
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
