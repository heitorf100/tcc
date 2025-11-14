<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('usuario.index');
}

public function create()
{
    return view('usuario.create');
}

public function show($id)
{
    return view('usuario.show');
}

public function edit($id)
{
    return view('usuario.edit');
}

}
