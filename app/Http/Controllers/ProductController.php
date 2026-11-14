<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('pages.products.index', [
            'products' => $products
        ]);
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('pages.products.show', [
            'product' => $product
        ]);
    }
}
