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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Grupo::all();//todos los registros de la tabla
        $grupos= Grupo::all();

        return view('vistasGrupo.index',compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vistasGrupo.create');
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
        $grupo=new Grupo();
        $grupo->nombre=$request->get('nombre');
        $grupo->ciclo=$request->get('ciclo');

        $grupo->save();
        return redirect('/grupos');
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
        //
        $grupo= Grupo::find($id);
        return view('vistasGrupo.update')->with('grupo',$grupo);

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
        $grupoAEditar=Grupo::find($id);
        $grupoAEditar->nombre=$request->get('nombre');
        $grupoAEditar->ciclo=$request->get('ciclo');

        $grupoAEditar->save();
        return redirect('/grupos');
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
        $grupoABorrar =Grupo::find($id);
        $grupoABorrar->delete();
        return redirect('/grupos');
    }
}
