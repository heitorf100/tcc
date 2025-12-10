<?php
namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()) return Prestador::orderBy('nome')->paginate(15);
        $prestadores = Prestador::orderBy('nome')->paginate(15);
        return view('prestador.index', compact('prestadores'));
    }

    public function create(){ return view('prestador.create'); }

    public function store(Request $request){
        $data = $request->validate([
            'nome'=>'required|string|max:255',
            'email'=>'nullable|email',
            'telefone'=>'nullable|string',
            'descricao'=>'nullable|string',
            'valor_hora'=>'nullable|numeric',
            'categoria_id'=>'nullable|integer',
            'usuario_id'=>'nullable|integer',
        ]);
        $p = Prestador::create($data);
        if ($request->wantsJson()) return response()->json($p,201);
        return redirect()->route('prestador.index')->with('success','Prestador criado.');
    }

    public function show(Request $request, Prestador $prestador){
        if ($request->wantsJson()) return $prestador;
        return view('prestador.show', compact('prestador'));
    }

    public function edit(Prestador $prestador){ return view('prestador.edit', compact('prestador')); }

    public function update(Request $request, Prestador $prestador){
        $data = $request->validate([
            'nome'=>'sometimes|required|string|max:255',
            'email'=>'nullable|email',
            'telefone'=>'nullable|string',
            'descricao'=>'nullable|string',
            'valor_hora'=>'nullable|numeric',
            'categoria_id'=>'nullable|integer',
            'usuario_id'=>'nullable|integer',
        ]);
        $prestador->update($data);
        if ($request->wantsJson()) return $prestador;
        return redirect()->route('prestador.index')->with('success','Prestador atualizado.');
    }

    public function destroy(Request $request, Prestador $prestador){
        $prestador->delete();
        if ($request->wantsJson()) return response()->json(['deleted'=>true]);
        return redirect()->route('prestador.index')->with('success','Prestador excluído.');
    }
}
