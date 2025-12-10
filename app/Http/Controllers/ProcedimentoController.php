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
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'duracao_minutos' => 'nullable|integer'
        ]);

        $p = Procedimento::create($data);
        return response()->json($p, 201);
    }

    public function show(Procedimento $procedimento)
    {
        return response()->json($procedimento);
    }

    public function update(Request $request, Procedimento $procedimento)
    {
        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'duracao_minutos' => 'nullable|integer'
        ]);

        $procedimento->update($data);
        return response()->json($procedimento);
    }

    public function destroy(Procedimento $procedimento)
    {
        $procedimento->delete();
        return response()->json(['deleted' => true]);
    }
}
