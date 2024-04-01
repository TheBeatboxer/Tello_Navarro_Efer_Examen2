<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    //
    public function index()
    {
        $actividades = Actividad::all();
        return $actividades;
    }

    public function show($id)
    {
        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response(['message' => 'Actividad no encontrada'], 404);
        }
        return response($actividad);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string',
            'Descripcion' => 'required|string',
            'Hora' => 'required|date_format:H:i:s',
            'Dia' => 'required|date',
        ]);

        $actividad = Actividad::create($request->all());
        return response()->json($actividad, 201);
    }

    public function update(Request $request, $id)
    {
        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }

        $request->validate([
            'Nombre' => 'required|string',
            'Descripcion' => 'required|string',
            'Hora' => 'required|date_format:H:i:s',
            'Dia' => 'required|date',
        ]);

        $actividad->update($request->all());
        return response()->json($actividad, 200);
    }

    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }

        $actividad->delete();
        return response()->json(['message' => 'Actividad borrado correctamente'], 200);
    }
    

}
