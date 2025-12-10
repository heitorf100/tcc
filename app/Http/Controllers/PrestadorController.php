<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
    public function index()
    {
        $prestadores = Prestador::orderBy('nome')->paginate(15);
        return response()->json($prestadores);
    }

    public function store(Request $request)
    {
        $data = $request->validate(['nome'=>'required|string|max:255']);
        $prestador = Prestador::create($request->all());
        return response()->json($prestador, 201);
    }

    public function show(Prestador $prestador)
    {
        return response()->json($prestador);
    }

    public function update(Request $request, Prestador $prestador)
    {
        $prestador->update($request->all());
        return response()->json($prestador);
    }

    public function destroy(Prestador $prestador)
    {
        $prestador->delete();
        return response()->json(['deleted'=>true]);
    }
}
