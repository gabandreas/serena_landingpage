<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products_catalog = json_decode(File::get(base_path('storage/app/data/products.json')), true);
        // dd($products);
        return view('index', compact('products_catalog'));
    }

    public function showCatalog()
    {
        $products = json_decode(File::get(base_path('storage/app/data/products.json')), true);
        // dd($products);
        return view('product', compact('products'));
    }
    
}