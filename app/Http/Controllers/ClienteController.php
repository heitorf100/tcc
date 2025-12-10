<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('nome')->paginate(15);
        return response()->json($clientes);
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'nullable|email',
        'telefone' => 'nullable|string|max:20',
        'cpf' => 'nullable|string|max:14',
        'data_nascimento' => 'nullable|date',
        'logradouro' => 'nullable|string|max:255',
        'numero' => 'nullable|string|max:50',
        'bairro' => 'nullable|string|max:255',
        'cidade' => 'nullable|string|max:255',
        'estado' => 'nullable|string|max:2',
        'cep' => 'nullable|string|max:20',
        'usuario_id' => 'nullable|integer',
    ]);

    $cliente = Cliente::create($data);
    return response()->json($cliente, 201);
}


    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

   public function update(Request $request, Cliente $cliente)
{
    $data = $request->validate([
        'nome' => 'sometimes|required|string|max:255',
        'email' => 'nullable|email',
        'telefone' => 'nullable|string|max:20',
        'cpf' => 'nullable|string|max:14',
        'data_nascimento' => 'nullable|date',
        'logradouro' => 'nullable|string|max:255',
        'numero' => 'nullable|string|max:50',
        'bairro' => 'nullable|string|max:255',
        'cidade' => 'nullable|string|max:255',
        'estado' => 'nullable|string|max:2',
        'cep' => 'nullable|string|max:20',
        'usuario_id' => 'nullable|integer',
    ]);

    $cliente->update($data);
    return response()->json($cliente);
}


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(['deleted'=>true]);
    }
}
