<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMarker;

class ProductMarkerController extends Controller
{
    //Listar Tudo
    public function index(){
       $productMarkers = ProductMarker::all();
       return $productMarkers;
    }

    //Cadastra um ProductMarker em um jogo
    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'marker_id' => 'required|integer'
            ]);

            $data = $request->all();

            $productMarker = ProductMarker::create($data);

            return $productMarker;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    //Apaga Marker de um jogo
    public function destroy(){}
}