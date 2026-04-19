<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universe;

class TestController extends Controller
{
    public function index(){
        $universes = Universe::all();
        return response()->json([
            'status' => true,
            'message' => 'Universes retrived successfully',
            'universes' => $universe
        ]);
    }

    public function getUniverse($id){
        $universe = Universe::find($id);

        if($universe){
            return response()->json([
                'status' => true,
                'message' => 'Universes retrived successfully',
                'universe' => $universe
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Universe not found',
            ]);
        }
    }

    public function createUniverse(Request $request){
        $universe = Universe::create([
            'universe' => $request->universe,
            'company' => $request->company,
            'age' => $request->age,
            'new_column' => $request->new_column
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Universe created successfully',
            'universe' => $universe
        ]);
    }
}
