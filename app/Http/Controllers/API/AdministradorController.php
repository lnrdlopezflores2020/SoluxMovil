<?php

namespace App\Http\Controllers\API;

use App\Models\Administrador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function index()
    {
        return Administrador::all();
    }

    public function store(Request $request)
    {
        return Administrador::create($request->all());
    }

    public function show($id)
    {
        return Administrador::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $admin = Administrador::findOrFail($id);
        $admin->update($request->all());
        return $admin;
    }

    public function destroy($id)
    {
        Administrador::destroy($id);
        return response()->json(['message' => 'Administrador eliminado']);
    }
}