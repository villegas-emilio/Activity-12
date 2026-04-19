<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        return response()->json(
            Superhero::with('universe')->get(),
            200
        );
    }

    public function show($id)
    {
        $hero = Superhero::with('universe')->find($id);

        if (!$hero) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($hero, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'real_name' => 'required',
            'gender' => 'required|in:male,female',
            'id_universe' => 'required|exists:universes,id'
        ]);

        $hero = Superhero::create($request->all());

        return response()->json($hero, 201);
    }

    public function update(Request $request, $id)
    {
        $hero = Superhero::find($id);

        if (!$hero) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $hero->update($request->all());

        return response()->json($hero, 200);
    }

    public function destroy($id)
    {
        $hero = Superhero::find($id);

        if (!$hero) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $hero->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}