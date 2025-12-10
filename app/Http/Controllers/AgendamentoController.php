<?php
namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Prestador;
use App\Models\ServicoProduto;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index(Request $request){
        if ($request->wantsJson()) return Agendamento::with(['cliente','prestador','servico'])->paginate(15);
        $agendamentos = Agendamento::with(['cliente','prestador','servico'])->paginate(15);
        return view('agendamento.index', compact('agendamentos'));
    }

    public function create(){
        $clientes = Cliente::orderBy('nome')->get();
        $prestadores = Prestador::orderBy('nome')->get();
        $servicos = ServicoProduto::orderBy('nome')->get();
        return view('agendamento.create', compact('clientes','prestadores','servicos'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'cliente_id'=>'required|integer',
            'prestador_id'=>'required|integer',
            'servico_id'=>'nullable|integer',
            'data_hora'=>'required|date',
            'status'=>'nullable|string'
        ]);
        $a = Agendamento::create($data);
        if ($request->wantsJson()) return response()->json($a,201);
        return redirect()->route('agendamento.index')->with('success','Agendado');
    }

    public function show(Request $request, Agendamento $agendamento){
        if ($request->wantsJson()) return $agendamento;
        return view('agendamento.show', compact('agendamento'));
    }

    public function edit(Agendamento $agendamento){
        $clientes = Cliente::orderBy('nome')->get();
        $prestadores = Prestador::orderBy('nome')->get();
        $servicos = ServicoProduto::orderBy('nome')->get();
        return view('agendamento.edit', compact('agendamento','clientes','prestadores','servicos'));
    }

    public function update(Request $request, Agendamento $agendamento){
        $data = $request->validate([
            'cliente_id'=>'required|integer',
            'prestador_id'=>'required|integer',
            'servico_id'=>'nullable|integer',
            'data_hora'=>'required|date',
            'status'=>'nullable|string'
        ]);
        $agendamento->update($data);
        if ($request->wantsJson()) return $agendamento;
        return redirect()->route('agendamento.index')->with('success','Atualizado');
    }

    public function destroy(Request $request, Agendamento $agendamento){
        $agendamento->delete();
        if ($request->wantsJson()) return response()->json(['deleted'=>true]);
        return redirect()->route('agendamento.index')->with('success','Excluído');
    }
}
