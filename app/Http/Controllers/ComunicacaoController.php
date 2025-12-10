<?php

namespace App\Http\Controllers;

use App\Models\Comunicacao;
use Illuminate\Http\Request;

class ComunicacaoController extends Controller
{
    public function index()
    {
        return response()->json(Comunicacao::latest()->paginate(20));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['mensagem'=>'required']);
        $c = Comunicacao::create($request->all());
        return response()->json($c,201);
    }

    public function show(Comunicacao $comunicacao)
    {
        return response()->json($comunicacao);
    }

    public function update(Request $request, Comunicacao $comunicacao)
    {
        $comunicacao->update($request->all());
        return response()->json($comunicacao);
    }

    public function destroy(Comunicacao $comunicacao)
    {
        $comunicacao->delete();
        return response()->json(['deleted'=>true]);
    }
}
