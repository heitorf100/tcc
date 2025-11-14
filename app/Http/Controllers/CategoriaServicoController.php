<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('categoria.index');
}

public function create()
{
    return view('categoria.create');
}

public function show($id)
{
    return view('categoria.show');
}

public function edit($id)
{
    return view('categoria.edit');
}

}
