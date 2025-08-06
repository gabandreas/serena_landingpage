<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserOrderController extends Controller
{
    private $jsonFilePath;
    public function __construct()
    {
        $this->jsonFilePath = base_path('storage/app/data/orders.json');
    }
    public function index()
    {
        $orders = json_decode(File::get($this->jsonFilePath), true);
        return view('admin.order_data', compact('orders'));
    }
    public function create()
    {
        return view('admin.add_order');
    }

    public function store(Request $request)
    {
        $orders = json_decode(File::get($this->jsonFilePath), true);
        $newOrder = [
            'id' => count($orders) + 1,
            'customer_name' => $request->customer_name,
            'product_name' => $request->product_name,
            'date' => now()->toDateString(),
            'status' => 'Proses',
        ];
        $orders[] = $newOrder;
        File::put($this->jsonFilePath, json_encode($orders, JSON_PRETTY_PRINT));
        return redirect('/order_data')->with('success', 'Pesanan berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $orders = json_decode(File::get($this->jsonFilePath), true);
        $order = collect($orders)->firstWhere('id', $id);
        return view('admin.edit_order', compact('order'));
    }

     public function update(Request $request, $id)
    {
        $orders = json_decode(File::get($this->jsonFilePath), true);
        $orderIndex = array_search($id, array_column($orders, 'id'));
        
        if ($orderIndex !== false) {
            $orders[$orderIndex]['customer_name'] = $request->customer_name;
            $orders[$orderIndex]['product_name'] = $request->product_name;
            $orders[$orderIndex]['status'] = $request->status;
            File::put($this->jsonFilePath, json_encode($orders, JSON_PRETTY_PRINT));
            return redirect('/order_data')->with('success', 'Pesanan berhasil diperbarui.');
        }
        return redirect('/order_data')->with('error', 'Pesanan tidak ditemukan.');
    }

     public function destroy($id)
    {
        $orders = json_decode(File::get($this->jsonFilePath), true);
        $orders = array_filter($orders, function ($order) use ($id) {
            return $order['id'] != $id;
        });
        File::put($this->jsonFilePath, json_encode(array_values($orders), JSON_PRETTY_PRINT));
        return redirect('/order_data')->with('success', 'Pesanan berhasil dihapus.');
    }
}
