<?php

namespace App\Http\Controllers\API;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (isset($data['contrasenia'])) {
            $data['contrasenia'] = Hash::make($data['contrasenia']);
        }
        return Usuario::create($data);
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $data = $request->all();
        if (isset($data['contrasenia'])) {
            $data['contrasenia'] = Hash::make($data['contrasenia']);
        }
        $usuario->update($data);
        return $usuario;
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return response()->json(['message' => 'Usuario eliminado']);
    }
}