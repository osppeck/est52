<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecCredencializacionController extends Controller
{
    public function index()
    {
        return "Hola desde el index sec credenciales";
    }
    public function create()
    {
        return "Hola desde el create sec credenciales";
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

    public function funcionRandom()
    {
        return "Hola desde el random sec credenciales";
    }


}
