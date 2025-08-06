<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    private $jsonFilePath;
    public function __construct()
    {
        $this->jsonFilePath = base_path('storage/app/data/products.json');
    }
    
    public function index()
    {
        $products = json_decode(File::get($this->jsonFilePath), true);
        // dd($products);
        return view('admin.product', compact('products'));
    }
    
    public function create()
    {
        return view('admin.add_product');
    }
    
    public function store(Request $request)
    {
        $products = json_decode(File::get($this->jsonFilePath), true);
        $newProduct = [
            'id' => count($products) + 1,
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $this->uploadImage($request->file('image')),
        ];
        $products[] = $newProduct;
        File::put($this->jsonFilePath, json_encode($products, JSON_PRETTY_PRINT));
        return redirect('/product_data')->with('success', 'Produk berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $products = json_decode(File::get($this->jsonFilePath), true);
        $product = collect($products)->firstWhere('id', $id);
        return view('admin.edit_product', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        $products = json_decode(File::get($this->jsonFilePath), true);
        $productIndex = array_search($id, array_column($products, 'id'));
        
        if ($productIndex !== false) {
            $products[$productIndex]['name'] = $request->name;
            $products[$productIndex]['price'] = $request->price;
            $products[$productIndex]['description'] = $request->description;
            if ($request->hasFile('image')) {
                $products[$productIndex]['image'] = $this->uploadImage($request->file('image'));
            }
            File::put($this->jsonFilePath, json_encode($products, JSON_PRETTY_PRINT));
            return redirect('/product_data')->with('success', 'Produk berhasil diperbarui.');
        }
        return redirect('/product_data')->with('error', 'Produk tidak ditemukan.');
    }
     
    public function destroy($id)
    {
        $products = json_decode(File::get($this->jsonFilePath), true);
        $products = array_filter($products, function ($product) use ($id) {
            return $product['id'] != $id;
        });
        File::put($this->jsonFilePath, json_encode(array_values($products), JSON_PRETTY_PRINT));
        return redirect('/product_data')->with('success', 'Produk berhasil dihapus.');
    }
    
    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('printer_img'), $imageName);
        return 'printer_img/' . $imageName;
    }
}
