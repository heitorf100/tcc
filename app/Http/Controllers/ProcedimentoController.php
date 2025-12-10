<?php

namespace App\Http\Controllers;

use App\Models\Procedimento;
use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    public function index()
    {
        return response()->json(Procedimento::orderBy('nome')->paginate(15));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['nome'=>'required|string|max:255']);
        $p = Procedimento::create($data);
        return response()->json($p,201);
    }

    public function show(Procedimento $procedimento)
    {
        return response()->json($procedimento);
    }

    public function update(Request $request, Procedimento $procedimento)
    {
        $procedimento->update($request->all());
        return response()->json($procedimento);
    }

    public function destroy(Procedimento $procedimento)
    {
        $procedimento->delete();
        return response()->json(['deleted'=>true]);
    }
}
