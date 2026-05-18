<?php

namespace App\Http\Controllers\API;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        return Cliente::create($request->all());
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return $cliente;
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return response()->json(['message' => 'Cliente eliminado']);
    }
}