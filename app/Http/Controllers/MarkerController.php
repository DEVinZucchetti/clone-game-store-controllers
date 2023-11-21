<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;

class MarkerController extends Controller
{
    //Listar Tudo
    public function index(){
       $markers = Marker::all();
       return $markers;
    }

    //Cria um novo Marker
    public function store(Request $request){
        try {
            $request->validate([
                'name' => 'required|unique:markers|string|max:100'
            ]);

            $data = $request->all();

            $marker = Marker::create($data);

            return $marker;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    //Apaga Marker
    public function destroy(){}
}