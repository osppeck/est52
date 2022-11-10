<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacion;

class CalificacionController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $calificaciones=Calificacion::all();
        return view('vistasCalificacion.index',compact('calificaciones'));
    }

    public function create()
    {
        return view('vistasCalificacion.create');
    }


    public function store(Request $request)
    {
        $calificacion=new Calificacion();

        $calificacion->periodo=$request->get('periodo');
        $calificacion->examenR=$request->get('examenR');
        $calificacion->calificacion=$request->get('calificacion');
        $calificacion->faltas=$request->get('faltas');
        $calificacion->alumno_id=$request->get('alumno_id');
        $calificacion->clase_id=$request->get('clase_id');

        $calificacion->save();
        return redirect('/calificaciones');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $calificacion = Calificacion::find($id);
        return view('vistasCalificacion.update', compact('calificacion'));
    }

    public function update(Request $request, $id)
    {
        $calificacion = Calificacion::find($id);

        $calificacion->periodo=$request->get('periodo');
        $calificacion->examenR=$request->get('examenR');
        $calificacion->calificacion=$request->get('calificacion');
        $calificacion->faltas=$request->get('faltas');
        $calificacion->alumno_id=$request->get('alumno_id');
        $calificacion->clase_id=$request->get('clase_id');

        $calificacion->save();
        return redirect('/calificaciones');
    }

    public function destroy($id)
    {
        Calificacion::find($id)->delete();
        return redirect('/calificaciones');
    }
}
