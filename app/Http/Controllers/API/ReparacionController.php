<?php

namespace App\Http\Controllers\API;

use App\Models\Reparacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReparacionController extends Controller
{
    public function index()
    {
        return Reparacion::all();
    }

    public function store(Request $request)
    {
        return Reparacion::create($request->all());
    }

    public function show($id)
    {
        return Reparacion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $reparacion = Reparacion::findOrFail($id);
        $reparacion->update($request->all());
        return $reparacion;
    }

    public function destroy($id)
    {
        Reparacion::destroy($id);
        return response()->json(['message' => 'Registro de reparación eliminado']);
    }
}