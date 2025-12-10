<?php
namespace App\Http\Controllers;

use App\Models\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    public function index(Request $request){
        if ($request->wantsJson()) return CategoriaServico::paginate(15);
        $items = CategoriaServico::paginate(15);
        return view('categoria.index', compact('items'));
    }
    public function create(){ return view('categoria.create'); }
    public function store(Request $request){
        $data=$request->validate(['nome'=>'required|string|max:255','descricao'=>'nullable|string']);
        $c = CategoriaServico::create($data);
        if ($request->wantsJson()) return response()->json($c,201);
        return redirect()->route('categoria.index')->with('success','Categoria criada');
    }
    public function show(Request $request, CategoriaServico $categoria){
        if ($request->wantsJson()) return $categoria;
        return view('categoria.show', compact('categoria'));
    }
    public function edit(CategoriaServico $categoria){ return view('categoria.edit', compact('categoria')); }
    public function update(Request $request, CategoriaServico $categoria){
        $data=$request->validate(['nome'=>'sometimes|required|string|max:255','descricao'=>'nullable|string']);
        $categoria->update($data);
        if ($request->wantsJson()) return $categoria;
        return redirect()->route('categoria.index')->with('success','Atualizado');
    }
    public function destroy(Request $request, CategoriaServico $categoria){
        $categoria->delete();
        if ($request->wantsJson()) return response()->json(['deleted'=>true]);
        return redirect()->route('categoria.index')->with('success','Excluído');
    }
}
