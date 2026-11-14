<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $featuredProducts = Product::latest()->limit(4)->get();
        $previewGalleries = Gallery::latest()->limit(4)->get();

        return view('pages.home', compact('featuredProducts', 'previewGalleries'));
    }
}
