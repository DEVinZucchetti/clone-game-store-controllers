<?php

namespace App\Http\Controllers;

use App\Models\ProductAsset;
use Illuminate\Http\Request;

class ProductAssetController extends Controller
{
    public function index(Request $request){

        $product_id =$request->query('product_id');

        $productsAssets = ProductAsset::query()
        ->where('product_id', $product_id)
        ->get();
        return $productsAssets;
     }
 
}
