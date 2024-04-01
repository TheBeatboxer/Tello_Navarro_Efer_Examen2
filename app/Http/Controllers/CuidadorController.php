<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuidador;

class CuidadorController extends Controller
{
    //
    public function index()
    {
        $cuidadores = Cuidador::all();
        return $cuidadores;
    }

    public function show($id)
    {
        $cuidador = Cuidador::find($id);
        if (!$cuidador) {
            return response(['message' => 'Cuidador no encontrado'], 404);
        }
        return response($cuidador);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Edad' => 'required|integer',
            'Especialidad' => 'required|string',
        ]);

        $cuidador = Cuidador::create($request->all());
        return response()->json($cuidador, 201);
    }

    public function update(Request $request, $id)
    {
        $cuidador = Cuidador::find($id);
        if (!$cuidador) {
            return response()->json(['message' => 'Cuidador not found'], 404);
        }

        $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Edad' => 'required|integer',
            'Especialidad' => 'required|string',
        ]);

        $cuidador->update($request->all());
        return response()->json($cuidador, 200);
    }

    public function destroy($id)
    {
        $cuidador = Cuidador::find($id);
        if (!$cuidador) {
            return response()->json(['message' => 'Cuidador not found'], 404);
        }

        $cuidador->delete();
        return response()->json(['message' => 'Cuidador deleted successfully'], 200);
    }
}
