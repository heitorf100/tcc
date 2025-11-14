<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('avaliacao.index');
}

public function create()
{
    return view('avaliacao.create');
}

public function show($id)
{
    return view('avaliacao.show');
}

public function edit($id)
{
    return view('avaliacao.edit');
}
}
