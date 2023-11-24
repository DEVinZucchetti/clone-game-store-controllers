<?php

namespace App\Http\Controllers;

use App\Models\ProductAsset;
use Exception;
use Illuminate\Http\Request;

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
 
}
