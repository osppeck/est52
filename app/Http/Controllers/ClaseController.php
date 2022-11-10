<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function index()
    {
        $clases=Clase::all();
        return view('vistasClase.index',compact('clases'));
    }

    public function create()
    {
        return view('vistasClase.create');
    }

    public function store(Request $request)
    {
        $clase=new Clase();

        $clase->horaE=$request->get('horaE');
        $clase->horaS=$request->get('horaS');
        $clase->dias=$request->get('dias');
        $clase->docente_id=$request->get('docente_id');
        $clase->materia_id=$request->get('materia_id');
        $clase->grupo_id = $request->get('grupo_id');
        $clase->aula_id = $request->get('aula_id');

        $clase->save();

        return redirect('/clases');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $clase = Clase::find($id);
        return view('vistasClase.update', compact('clase'));
    }

    public function update(Request $request, $id)
    {
        $clase = Clase::find($id);

        $clase->horaE=$request->get('horaE');
        $clase->horaS=$request->get('horaS');
        $clase->dias=$request->get('dias');
        $clase->docente_id=$request->get('docente_id');
        $clase->materia_id=$request->get('materia_id');
        $clase->grupo_id = $request->get('grupo_id');
        $clase->aula_id = $request->get('aula_id');

        $clase->save();
        return redirect('/clases');
    }

    public function destroy($id)
    {
        Clase::find($id)->delete();
        return redirect('/clases');
    }
}
