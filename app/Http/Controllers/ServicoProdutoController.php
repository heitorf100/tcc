<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('servicoProduto.index');
}

public function create()
{
    return view('servicoProduto.create');
}

public function show($id)
{
    return view('servicoProduto.show');
}

public function edit($id)
{
    return view('servicoProduto.edit');
}

}
