<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required|string|max:150|unique:categories',
            ]);

            $data = $request->all();
            $category = Category::create($data);
            return $category;
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

    public function index() {
    }

    public function show($id) {
    }

    public function update($id) {
    }

    public function destroy($id) {
    }
}
