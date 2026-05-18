<?php

namespace App\Http\Controllers\API;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DispositivoController extends Controller
{
    public function index()
    {
        return Dispositivo::all();
    }

    public function store(Request $request)
    {
        return Dispositivo::create($request->all());
    }

    public function show($id)
    {
        return Dispositivo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->update($request->all());
        return $dispositivo;
    }

    public function destroy($id)
    {
        Dispositivo::destroy($id);
        return response()->json(['message' => 'Dispositivo eliminado']);
    }
}