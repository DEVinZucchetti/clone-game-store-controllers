<?php

namespace App\Http\Controllers;

use App\Models\ProductAsset;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductAssetController extends Controller
{
    public function index(Request $request)
    {

        $product_id = $request->query('product_id');

        $productsAssets = ProductAsset::query()
            ->where('product_id', $product_id)
            ->get();

        return $productsAssets;
    }

     public function store(Request $request) {

        try {
            $data = $request->all();

            $request->validate([
                'product_id' => 'integer|required'
            ]);

            $productAsset  = ProductAsset::create($data);

            return $productAsset;
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

     }

     public function show($id){
        $productAsset = ProductAsset::find($id);

        if(!$productAsset) return response()->json(['message' => 'Produto asset não encontrado'], 404);

        return $productAsset;
    }

     public function update($id, Request $request){
        try {

            $productAsset = ProductAsset::find($id);

            if(!$productAsset) return response()->json(['message' => 'Produto asset não encontrado'], 404);

            $request->validate([
                'name' => [
                    'required',
                    Rule::unique('products')->ignore($productAsset->id),
                ]
            ]);

            $productAsset->update($request->all());

            return $productAsset;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

    public function destroy($id){
        $productAsset = ProductAsset::find($id);

        if(!$productAsset) return response()->json(['message' => 'Asset não encontrado'], 404);

        $productAsset->delete();

        return response('', 204);
    }
 
}
