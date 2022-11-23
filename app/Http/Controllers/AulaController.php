<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{

    //para que no nos permita ingrsar directamtre al panel desd ele login,
    // nos redirige al mismo login 
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //se ejecuta por defecto si no hay otro argumento en una ruta o href: /aulas
        $aulas= Aula::all();
        return view('vistasAula.index',compact('aulas'));
    }

    public function create()
    {
        //despúes de submitear un formulario llamado desde aqui se ejecuta la 
        //función store automaticamente
        //solo amndamos llamr la vista para capturar los datos
        return view('vistasAula.create');
    }

    public function store(Request $request)
    {
        $this->validar($request);
        $aula=new Aula();
        $aula->nombre=$request->get('nombre');
        $aula->comentarios=$request->get('comentarios');

        $aula->save();
        return redirect('/aulas');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //llamado por /aulas/{{ $aula->id }}/edit 
        //en la vista index,  al listar cada elemtno dinamicamente
        $aula= Aula::find($id);
        return view('vistasAula.update')->with('aula',$aula);
    }


    public function update(Request $request, $id)
    {
        $this->validar($request);
        $aulaAEditar=Aula::find($id);
        $aulaAEditar->nombre=$request->get('nombre');
        $aulaAEditar->comentarios=$request->get('comentarios');

        $aulaAEditar->save();
        return redirect('/aulas');
    }


    public function destroy($id)
    {
        $aulaABorrar =Aula::find($id);
        $aulaABorrar->delete();
        return redirect('/aulas');
    }

    public function validar(Request $request)
    {
        //FUNCIÓN AUXILIAR DE VALIDACIÓN DEl formualrio
        $this->validate($request, [
            'nombre'=>'required',
            'comentarios'=>'required'
        ]);
    }
}
