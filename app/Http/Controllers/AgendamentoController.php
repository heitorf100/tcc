<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamento.index', compact('agendamentos'));
    }

    public function create()
    {
        return view('agendamento.create');
    }

    public function store(Request $request)
    {
        // ajuste validações/campos conforme seu Model
        $data = $request->all();
        Agendamento::create($data);

        return redirect()->route('agendamento.index')->with('success', 'Agendamento criado.');
    }

    public function show($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamento.show', compact('agendamento'));
    }

    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamento.edit', compact('agendamento'));
    }

    public function update(Request $request, $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->all());

        return redirect()->route('agendamento.index')->with('success', 'Agendamento atualizado.');
    }

    public function destroy($id)
    {
        Agendamento::destroy($id);
        return redirect()->route('agendamento.index')->with('success', 'Agendamento excluído.');
    }
}
