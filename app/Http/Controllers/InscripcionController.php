<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Persona;
use App\Models\Tutor;

class InscripcionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $alumnos=Alumno::all();

        return view('modSecretaria.panelSecretaria',compact('alumnos'));
        //return view('modSecretaria.inscripcionCreate',compact('tutores'));
    }

    public function create()
    {
        $tutores=Tutor::all();
        return view('modSecretaria.inscripcionCreate',compact('tutores'));
    }


    public function store(Request $request)
    {
        // validamos el formulario completo
        $this->validar($request);

        // creamos el alumno, el cual  ligamos con el tutor, dejamos pendiente el tutor
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


        //si  existe el tutor 
        if($request->input('existeTutor')=='si'){
            //solamente obtenemos el id
            $alumno->tutor_id = $request->get('tutor_id');
        }else{
            //creamos al tutor
            $this->validarExtras($request);
            $tutor=new Tutor();
            $personaTutor=new Persona();

            $personaTutor->nombre=$request->get('nombreTutor');
            $personaTutor->apellido_p=$request->get('apellido_pTutor');
            $personaTutor->apellido_m=$request->get('apellido_mTutor');
            $personaTutor->sexo=$request->get('sexoTutor');
            $personaTutor->fecha_nacimiento=$request->get('fecha_nacimientoTutor');

            $tutor->telefono_1= $request->input('telefono_1');
            $tutor->telefono_2= $request->input('telefono_2');
            $tutor->correo= $request->input('correo');
            $tutor->estado= $request->input('estado');
            $tutor->municipio= $request->input('municipio');
            $tutor->colonia= $request->input('colonia');
            $tutor->calle= $request->input('calle');
            $tutor->numero= $request->input('numero');
            if($request->input('numero')==''){
                $tutor->numero= 'S/N';
            }

            $personaTutor->save();
            $personaTutor->tutor()->save($tutor);

            //retomamos  el campo tutor del alumno
            $alumno->tutor_id = $tutor->id;
        }

        //ahora si podemos  guardar al alumno ligado a su tutor
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function validar(Request $request){
        $this->validate($request, [
            'nombre'=>'required',
            'apellido_p'=>'required|between:3,10',
            'apellido_m'=>'required',
            'sexo'=>'required',
            'fecha_nacimiento'=>'required',
            'curp'=>'required',
            'status'=>'required',
            'fechaInscripcion'=>'required',
            'grado'=>'required',

            'nombreTutor'=>'required_if:existeTutor,no',
            'apellido_pTutor'=>'required_if:existeTutor,no',
            'apellido_mTutor'=>'required_if:existeTutor,no',
            'sexoTutor'=>'required_if:existeTutor,no',
            'fecha_nacimientoTutor'=>'required_if:existeTutor,no',
            'telefono_1'=>'required_if:existeTutor,no',
            'telefono_2'=>'required_if:existeTutor,no',
            'correo'=>'required_if:existeTutor,no',
            'estado'=>'required_if:existeTutor,no',
            'municipio'=>'required_if:existeTutor,no',
            'colonia'=>'required_if:existeTutor,no',
            'calle'=>'required_if:existeTutor,no',

            'tutor_id'=>'required_if:existeTutor,si'
        ]);
    }

    public function validarExtras(Request $request){
        $this->validate($request, [
            'telefono_1'=>'numeric|digits:10',
            'telefono_2'=>'numeric|digits:10',
            'correo'=>'email'
        ]);
    }

}
