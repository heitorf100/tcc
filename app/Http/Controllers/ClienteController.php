<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            return Cliente::orderBy('nome')->paginate(15);
        }
        $clientes = Cliente::orderBy('nome')->paginate(15);
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable|string|max:30',
            'cpf' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'logradouro' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:50',
            'bairro' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:10',
            'cep' => 'nullable|string|max:20',
            'usuario_id' => 'nullable|integer',
        ]);

        $cliente = Cliente::create($data);

        if ($request->wantsJson()) {
            return response()->json($cliente, 201);
        }

        return redirect()->route('cliente.index')->with('success', 'Cliente criado.');
    }

    public function show(Request $request, Cliente $cliente)
    {
        if ($request->wantsJson()) return $cliente;
        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable|string|max:30',
            'cpf' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'logradouro' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:50',
            'bairro' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:10',
            'cep' => 'nullable|string|max:20',
            'usuario_id' => 'nullable|integer',
        ]);

        $cliente->update($data);

        if ($request->wantsJson()) return $cliente;

        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado.');
    }

    public function destroy(Request $request, Cliente $cliente)
    {
        $cliente->delete();
        if ($request->wantsJson()) return response()->json(['deleted' => true]);
        return redirect()->route('cliente.index')->with('success', 'Cliente excluído.');
    }
}
