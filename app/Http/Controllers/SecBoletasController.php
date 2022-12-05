<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecBoletasController extends Controller
{
    public function index()
    {
        $datos[0] =['nombre'=>'gumaro de jesus olivera villalobos','grado'=>'3B','final'=>'9'];
        
        $info[0] = ['materia' => 'matematicas', 'cal1' => 10, 'fal1' => 0, 'cal1' => 10, 'fal1' => 0, 'cal2' => 10, 'fal2' => 0, 'cal3' => 10, 'fal3' => 0, 'promedio'=>10 ];
        $info[1] = ['materia' => 'español', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[2] = ['materia' => 'ingles', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[3] = ['materia' => 'biologia', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[4] = ['materia' => 'historia', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[5] = ['materia' => 'formacion civica', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 100, 'fal3' => 10, 'promedio'=>10 ];
        $info[6] = ['materia' => 'geografia', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[7] = ['materia' => 'artes', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 10, 'fal3' => 10, 'promedio'=>10 ];
        $info[8] = ['materia' => 'tutoria', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 9, 'fal3' => 10, 'promedio'=>10 ];
        $info[9] = ['materia' => 'educ. fisica', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 8, 'fal3' => 10, 'promedio'=>10 ];
        $info[10] = ['materia' => 'vida saludable', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 7, 'fal3' => 10, 'promedio'=>10 ];
        $info[11] = ['materia' => 'tec', 'cal1' => 10, 'fal1' => 10, 'cal1' => 10, 'fal1' => 10, 'cal2' => 100, 'fal2' => 10, 'cal3' => 100, 'fal3' => 10, 'promedio'=>10 ];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
}
