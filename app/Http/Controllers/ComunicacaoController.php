<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    return view('comunicacao.index');
}

public function create()
{
    return view('comunicacao.create');
}

public function show($id)
{
    return view('comunicacao.show');
}

public function edit($id)
{
    return view('comunicacao.edit');
}


}
