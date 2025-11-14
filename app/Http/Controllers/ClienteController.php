<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('cliente.index');
}

public function create()
{
    return view('cliente.create');
}

public function show($id)
{
    return view('cliente.show');
}

public function edit($id)
{
    return view('cliente.edit');
}

}
