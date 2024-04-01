<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalController extends Controller
{
    //

    public function index()
    {
        $animals = Animal::with('especie', 'recinto', 'cuidador')->get();
        return $animals;
    }

    public function show($id)
    {
        $animal = Animal::with('especie', 'recinto', 'cuidador')->find($id);
        if (!$animal) {
            return response(['message' => 'Animal not found'], 404);
        }
        return response($animal);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string',
            'Edad' => 'required|integer',
            'IdRecinto' => 'required|integer',
            'IdEspecie' => 'required|integer',
            'IdCuidador' => 'required|integer',            
            'NombreCientifico' => 'required|string',
            'Sexo' => 'required|string',
        ]);

        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return response()->json(['message' => 'Animal no encontrado'], 404); // estados
        }

        $request->validate([
            'Nombre' => 'required|string',
            'Edad' => 'required|integer',
            'IdRecinto' => 'required|integer',
            'IdEspecie' => 'required|integer',
            'IdCuidador' => 'required|integer',            
            'NombreCientifico' => 'required|string',
            'Sexo' => 'required|string',
        ]);

        $animal->update($request->all());
        return response()->json($animal, 200);
    }

    public function destroy($id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return response()->json(['message' => 'Animal no encontrado'], 404);
        }

        $animal->delete();
        return response()->json(['message' => 'Animal borrados correctamente'], 200);
    }
}

