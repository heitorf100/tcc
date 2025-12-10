<?php

namespace App\Http\Controllers;

use App\Models\ServicoProduto;
use Illuminate\Http\Request;

class ServicoProdutoController extends Controller
{
    public function index()
    {
        return response()->json(ServicoProduto::orderBy('nome')->paginate(15));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['nome'=>'required|string|max:255']);
        $s = ServicoProduto::create($data);
        return response()->json($s,201);
    }

    public function show(ServicoProduto $servicoProduto)
    {
        return response()->json($servicoProduto);
    }

    public function update(Request $request, ServicoProduto $servicoProduto)
    {
        $servicoProduto->update($request->all());
        return response()->json($servicoProduto);
    }

    public function destroy(ServicoProduto $servicoProduto)
    {
        $servicoProduto->delete();
        return response()->json(['deleted'=>true]);
    }
}
