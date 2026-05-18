<?php

namespace App\Http\Controllers\API;

use App\Models\Tecnico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TecnicoController extends Controller
{
    public function index()
    {
        return Tecnico::all();
    }

    public function store(Request $request)
    {
        return Tecnico::create($request->all());
    }

    public function show($id)
    {
        return Tecnico::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->update($request->all());
        return $tecnico;
    }

    public function destroy($id)
    {
        Tecnico::destroy($id);
        return response()->json(['message' => 'Técnico eliminado']);
    }
}