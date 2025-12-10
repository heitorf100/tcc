<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $items = Avaliacao::with(['cliente','prestador'])->paginate(15);
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cliente_id'=>'required|integer',
            'prestador_id'=>'required|integer',
            'nota'=>'required|numeric|min:0|max:5'
        ]);
        $av = Avaliacao::create($data);
        return response()->json($av, 201);
    }

    public function show(Avaliacao $avaliacao)
    {
        return response()->json($avaliacao);
    }

    public function update(Request $request, Avaliacao $avaliacao)
    {
        $avaliacao->update($request->all());
        return response()->json($avaliacao);
    }

    public function destroy(Avaliacao $avaliacao)
    {
        $avaliacao->delete();
        return response()->json(['deleted'=>true]);
    }
}
