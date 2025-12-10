<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        return response()->json(Agendamento::orderBy('data_hora')->paginate(15));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['cliente_id'=>'required','prestador_id'=>'required','data_hora'=>'required|date']);
        $a = Agendamento::create(array_merge($data, ['status'=>'pendente']));
        return response()->json($a,201);
    }

    public function show(Agendamento $agendamento)
    {
        return response()->json($agendamento);
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $agendamento->update($request->all());
        return response()->json($agendamento);
    }

    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return response()->json(['deleted'=>true]);
    }
}
