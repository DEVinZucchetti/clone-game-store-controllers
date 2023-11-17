<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request) {
        $data = $request->all();

        $product = Product::create($data);

        return $product;

    }

    public function show() {

    }

    public function destroy() {

    }

    public function update() {

    }
}
