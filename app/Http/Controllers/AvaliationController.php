<?php

namespace App\Http\Controllers;

use App\Models\Avaliation;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{
    public function index()
    {
        return Avaliation::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'description' => 'required|string',
            'recommended' => 'required|boolean',
        ]);

        $avaliation = Avaliation::create($validatedData);

        return response()->json($avaliation, 201);
    }

    public function show($id)
    {
        $avaliation = Avaliation::find($id);

        if (!$avaliation) {
            return response()->json(['message' => 'Avaliação não encontrada'], 404);
        }

        return response()->json($avaliation);
    }

    public function update(Request $request, $id)
    {
        $avaliation = Avaliation::find($id);

        if (!$avaliation) {
            return response()->json(['message' => 'Avaliação não encontrada'], 404);
        }

        $validatedData = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'description' => 'required|string',
            'recommended' => 'required|boolean',
        ]);

        $avaliation->update($validatedData);

        return response()->json($avaliation);
    }

    public function destroy($id)
    {
        $avaliation = Avaliation::find($id);

        if (!$avaliation) {
            return response()->json(['message' => 'Avaliação não encontrada'], 404);
        }

        $avaliation->delete();

        return response()->json(['message' => 'Avaliação deletada com sucesso']);
    }
}