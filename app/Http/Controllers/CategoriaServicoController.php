<?php

namespace App\Http\Controllers;

use App\Models\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    public function index()
    {
        return response()->json(CategoriaServico::orderBy('nome')->paginate(15));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['nome'=>'required|string|max:255']);
        $c = CategoriaServico::create($data);
        return response()->json($c,201);
    }

    public function show(CategoriaServico $categoriaServico)
    {
        return response()->json($categoriaServico);
    }

    public function update(Request $request, CategoriaServico $categoriaServico)
    {
        $categoriaServico->update($request->all());
        return response()->json($categoriaServico);
    }

    public function destroy(CategoriaServico $categoriaServico)
    {
        $categoriaServico->delete();
        return response()->json(['deleted'=>true]);
    }
}
