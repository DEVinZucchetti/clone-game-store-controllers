<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|unique:products|string|max:150',

            ]);

            $data = $request->all();

            $product = Product::create($data);

            return $product;
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $product = Product::find($id);

            if (!$product) return response()->json(['message' => 'Produto não encontrado'], 404);

            return $product;
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) return response()->json(['message' => 'Produto não encontrado'], 404);


        $product->delete();

        return response('', 204);
    }

    public function update($id, Request $request)
    {
        try {

            $product = Product::find($id);

            if (!$product) return response()->json(['message' => 'Produto não encontrado'], 404);

            $request->validate([
                'name' => 'required|unique:products|string|max:150'
            ]);

            $product->update($request->all());

            return $product;
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }
}
