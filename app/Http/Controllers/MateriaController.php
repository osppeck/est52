<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//2.- crear el controlador de tipo resource
//importar modelo
use App\Models\Materia;

class MateriaController extends Controller
{
    //protejer el panel para usuarios con el contructor padre
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //retornar toda la tabla, metodo por defecto tipo constrctor,
        //retornamos la vista corresp(aun no la creamos). junto a los datos

        $materias=Materia::all();
        return view('vistasMateria.index',compact('materias'));
        //3 CREAR EL DIRECTRORIO DE VISTAS DE ESTA CLASE------4->rutas--------------------------
    }

    public function create()
    {
        //7.-para crear nuevas amterias retornamos la vista que capture lsocdatos
        //creamos esa vista.
        return view('vistasMateria.create');
    }

    public function store(Request $request)
    {
        //8.- creamos store que se activa al recibir un submit, ya podemos crear
        //creamos la vista
        $materia=new Materia();
        $materia->nombre=$request->get('nombre');
        $materia->programa=$request->get('programa');

        $materia->save();
        return redirect('/materias');
    }

    public function edit($id)
    {
        //9.-Creamos la función y vista para la llamada al boton editarde cada fila
        //creamos la vista
        $materia= Materia::find($id);
        return view('vistasMateria.update')->with('materia',$materia);
    }

    public function update(Request $request, $id)
    {
        //creamos el update se ejecuta solo cuadno recibe el submit de edit, ya podemos editar
        $materiaAEditar=Materia::find($id);
        $materiaAEditar->nombre=$request->get('nombre');
        $materiaAEditar->programa=$request->get('programa');

        $materiaAEditar->save();
        return redirect('/materias');
    }

    public function destroy($id)
    {
        //10 creamos destroy,solo necesita una llamada que ya creamos en index
        $materiaABorrar =Materia::find($id);
        $materiaABorrar->delete();
        return redirect('/materias');
    }
}
