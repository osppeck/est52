<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{

    //para que no nos permita ingrsar directamtre al panel desd ele login,
    // nos redirige al mismo login 
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {

        //Grupo::all();//todos los registros de la tabla
        $grupos= Grupo::all();

        return view('vistasGrupo.index',compact('grupos'));
    }

    public function create()
    {
        //
        return view('vistasGrupo.create');
    }

    public function store(Request $request)
    {
        //validamos primero antes que todo
        $this->validar($request);

        $grupo=new Grupo();
        $grupo->nombre=$request->get('grados') . $request->get('grupos');

        if($request->get('grupos')=="X"){
            $this->validar($request);
            $grupo->nombre=$request->get('grados') . $request->get('otro');
        }
        

        $grupo->ciclo=$request->get('ciclo1')."-".$request->get('ciclo2');
        $grupo->save();
        return redirect('/grupos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $grupo= Grupo::find($id);
        return view('vistasGrupo.update')->with('grupo',$grupo);

    }

    public function update(Request $request, $id)
    {

        $grupoAEditar=Grupo::find($id);
        $nombre=$request->get('nombre').$request->get('grupo');

        $grupoAEditar->nombre=$nombre;
        $grupoAEditar->ciclo=$request->get('ciclo1')."-".$request->get('ciclo2');


        $grupoAEditar->save();
        return redirect('/grupos');
    }

    public function destroy($id)
    {
        //
        $grupoABorrar =Grupo::find($id);
        $grupoABorrar->delete();
        return redirect('/grupos');
    }

    public function validar(Request $request)
    {
        //FUNCIÓN AUXILIAR DE VALIDACIÓN DEl formualrio
        $this->validate($request, [
            'otro'=>'required_if:grupos,X',
            'ciclo1'=>'required',
            'ciclo2'=>'required'
        ]);
    }

}
