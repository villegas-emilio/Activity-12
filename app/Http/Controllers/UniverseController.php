<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        return response()->json(Universe::all(), 200);
    }

    public function show($id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($universe, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'universe' => 'required|unique:universes',
            'company' => 'required|in:DC,Marvel',
            'age' => 'required'
        ]);

        $universe = Universe::create($request->all());

        return response()->json($universe, 201);
    }

    public function update(Request $request, $id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $universe->update($request->all());

        return response()->json($universe, 200);
    }

    public function destroy($id)
    {
        $universe = Universe::find($id);

        if (!$universe) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $universe->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}