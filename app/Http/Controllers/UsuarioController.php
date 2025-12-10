<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return response()->json(Usuario::paginate(15));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['name'=>'required','email'=>'required|email','password'=>'required']);
        $data['password'] = Hash::make($data['password']);
        $u = Usuario::create($data);
        return response()->json($u,201);
    }

    public function show(Usuario $usuario)
    {
        return response()->json($usuario);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $data = $request->all();
        if(isset($data['password'])) $data['password'] = Hash::make($data['password']);
        $usuario->update($data);
        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(['deleted'=>true]);
    }
}
