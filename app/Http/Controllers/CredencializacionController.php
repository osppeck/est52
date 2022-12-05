<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredencializacionController extends Controller
{
    public function index()
    {
        return "Hola desde el index credencializacion";
    }

    public function create()
    {
        return "Hola desde el create credencializacion";
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
