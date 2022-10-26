<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Carbon\Carbon;

class PersonaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $personas=Persona::all();
        return view('vistasPersona.index',compact('personas'));
    }

    public function create()
    {
        return view('vistasPersona.create');
    }

//--------------------store persona extraoficial


    public function store(Request $request)
    {
        $persona=new Persona();
        $persona->nombre=$request->get('nombre');
        $persona->apellido_p=$request->get('apellido_p');
        $persona->apellido_m=$request->get('apellido_m');
        $persona->sexo=$request->get('sexo');
        $persona->fecha_nacimiento=$request->get('fecha_nacimiento');

        $persona->save();
        return redirect('/personas');
    }

    //stores de  todas las tablas que tienen referencia en ppersona
    public function storeTutor(Request $request)
    {
        $persona = new Persona();
        $persona->nombre= $request->input('nombre');
        $persona->apellido_p= $request->input('apellido_p');
        $persona->apellido_m= $request->input('apellido_m');
        $persona->sexo= $request->input('sexo');
        $persona->fecha_nacimiento= $request->input('fecha_nacimiento');
        $persona->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $personaABorrar = Persona::find($id);
        $personaABorrar-> delete();
        return redirect('/personas');
    }
}
