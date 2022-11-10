<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Persona;

class DocenteController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $trabajadores=Trabajador::where('puesto', 'DOCENTE')->get();
        return view('vistasDocente.index',compact('trabajadores'));
    }


    public function create()
    {
        return view('vistasDocente.create');
    }


    public function store(Request $request)
    {
        $trabajador=new Trabajador();
        $persona=new Persona();

        $persona->nombre=$request->get('nombre');
        $persona->apellido_p=$request->get('apellido_p');
        $persona->apellido_m=$request->get('apellido_m');
        $persona->sexo=$request->get('sexo');
        $persona->fecha_nacimiento=$request->get('fecha_nacimiento');

        $trabajador->puesto=$request->get('puesto');
        $trabajador->telefono=$request->get('telefono');
        $trabajador->correo=$request->get('correo');
        $trabajador->horas=$request->get('horas');
        $trabajador->status=$request->get('status');

        $persona->save();
        $persona->trabajador()->save($trabajador);

        return redirect('/docentes');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $persona = Trabajador::find($id)->persona;
        return view('vistasTrabajador.update', compact( 'persona'));
    }

    public function update(Request $request, $id)
    {
        $trabajador = Trabajador::find($id);

        $trabajador->persona->nombre = $request->get('nombre');
        $trabajador->persona->apellido_p = $request->get('apellido_p');
        $trabajador->persona->apellido_m = $request->get('apellido_m');
        $trabajador->persona->sexo = $request->get('sexo');
        $trabajador->persona->fecha_nacimiento = $request->get('fecha_nacimiento');
        
        $trabajador->puesto = $request->get('puesto');
        $trabajador->telefono = $request->get('telefono');
        $trabajador->correo = $request->get('correo');
        $trabajador->horas = $request->get('horas');
        $trabajador->status = $request->get('status');

        $trabajador->save();
        $trabajador->persona->save();
        return redirect('/docentes');
    }


    public function destroy($id)
    {
        Trabajador::find($id)->persona()->delete();
        return redirect('/trabajadores');
    }
}
