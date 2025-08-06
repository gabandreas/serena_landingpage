<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $products = [];

    public function __construct()
    {
        // Simulasi data produk (harusnya dari DB, tapi sekarang hardcoded)
        $this->products = session()->get('products', []);
    }

    public function index()
    {
        return response()->json($this->products);
    }

    public function create()
    {
        return "Form tambah produk (simulasi)";
    }

    public function store(Request $request)
    {
        $id = uniqid();
        $this->products[$id] = [
            'id' => $id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ];
        session()->put('products', $this->products);
        return redirect('/admin');
    }

    public function edit($id)
    {
        return response()->json($this->products[$id] ?? []);
    }

    public function update(Request $request, $id)
    {
        $this->products[$id]['name'] = $request->name;
        $this->products[$id]['price'] = $request->price;
        $this->products[$id]['stock'] = $request->stock;
        session()->put('products', $this->products);
        return redirect('/admin');
    }

    public function delete($id)
    {
        unset($this->products[$id]);
        session()->put('products', $this->products);
        return redirect('/admin');
    }
}
