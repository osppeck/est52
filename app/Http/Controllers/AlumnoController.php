<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Persona;

class AlumnoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $alumnos=Alumno::all();
        return view('vistasAlumno.index',compact('alumnos'));
    }

    public function create()
    {
        return view('vistasAlumno.create');
    }

    public function store(Request $request)
    {
        $alumno=new Alumno();
        $persona=new Persona();

        $persona->nombre=$request->get('nombre');
        $persona->apellido_p=$request->get('apellido_p');
        $persona->apellido_m=$request->get('apellido_m');
        $persona->sexo=$request->get('sexo');
        $persona->fecha_nacimiento=$request->get('fecha_nacimiento');

        $alumno->curp=$request->get('curp');
        $alumno->status=$request->get('status');
        $alumno->fechaInscripcion=$request->get('fechaInscripcion');
        $alumno->grado=$request->get('grado');
        $alumno->tutor_id = $request->get('tutor_id');
        $alumno->grupo_id = $request->get('grupo_id');

        $persona->save();
        $persona->alumno()->save($alumno);

        return redirect('/alumnos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $persona = Alumno::find($id)->persona;
        return view('vistasAlumno.update', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $alumno->persona->nombre = $request->get('nombre');
        $alumno->persona->apellido_p = $request->get('apellido_p');
        $alumno->persona->apellido_m = $request->get('apellido_m');
        $alumno->persona->sexo = $request->get('sexo');
        $alumno->persona->fecha_nacimiento = $request->get('fecha_nacimiento');
        
        $alumno->curp = $request->get('curp');
        $alumno->status = $request->get('status');
        $alumno->fechaInscripcion = $request->get('fechaInscripcion');
        $alumno->grado = $request->get('grado');
        $alumno->tutor_id = $request->get('tutor_id');
        $alumno->grupo_id = $request->get('grupo_id');

        $alumno->save();
        $alumno->persona->save();
        return redirect('/alumnos');
    }

    public function destroy($id)
    {
        Alumno::find($id)->persona()->delete();
        return redirect('/alumnos');
    }
}
