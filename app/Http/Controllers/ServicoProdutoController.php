<?php

namespace App\Http\Controllers;

use App\Models\ServicoProduto;
use Illuminate\Http\Request;

class ServicoProdutoController extends Controller
{
    public function index()
    {
        $servicoProdutos = ServicoProduto::orderBy('nome')->paginate(15);
        return view('servicoProduto.index', compact('servicoProdutos'));
    }

    public function create()
    {
        return view('servicoProduto.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        ServicoProduto::create($data);

        return redirect()->route('servicoProduto.index');
    }

    public function show(ServicoProduto $servicoProduto)
    {
        return view('servicoProduto.show', compact('servicoProduto'));
    }

    public function edit(ServicoProduto $servicoProduto)
    {
        return view('servicoProduto.edit', compact('servicoProduto'));
    }

    public function update(Request $request, ServicoProduto $servicoProduto)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        $servicoProduto->update($data);

        return redirect()->route('servicoProduto.index');
    }

    public function destroy(ServicoProduto $servicoProduto)
    {
        $servicoProduto->delete();
        return redirect()->route('servicoProduto.index');
    }
}
