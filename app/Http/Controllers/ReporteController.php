<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;

class ReporteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $reportes=Reporte::all();
        return view('vistasReporte.index',compact('reportes'));
    }

    public function create()
    {
        return view('vistasReporte.create');
    }

    public function store(Request $request)
    {
        $reporte=new Reporte();

        $reporte->puntaje=$request->get('puntaje');
        $reporte->asunto=$request->get('asunto');
        $reporte->observaciones=$request->get('observaciones');
        $reporte->fecha=$request->get('fecha');
        $reporte->alumno_id = $request->get('alumno_id');
        $reporte->trabajador_id = $request->get('trabajador_id');

        $reporte->save();

        return redirect('/reportes');
    }

    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $reporte = Reporte::find($id);
        return view('vistasReporte.update', compact('reporte'));
    }

    public function update(Request $request, $id)
    {
        $reporte = Reporte::find($id);

        $reporte->puntaje=$request->get('puntaje');
        $reporte->asunto=$request->get('asunto');
        $reporte->observaciones=$request->get('observaciones');
        $reporte->fecha=$request->get('fecha');
        $reporte->alumno_id = $request->get('alumno_id');
        $reporte->trabajador_id = $request->get('trabajador_id');

        $reporte->save();
        return redirect('/reportes');
    }


    public function destroy($id)
    {
        Reporte::find($id)->delete();
        return redirect('/reportes');
    }
}
