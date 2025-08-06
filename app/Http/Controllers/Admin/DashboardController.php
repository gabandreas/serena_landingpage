<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    private $usersFilePath;
    private $ordersFilePath;
    private $productsFilePath;
    public function __construct()
    {
        $this->usersFilePath = base_path('storage/app/data/user.json');
        $this->ordersFilePath = base_path('storage/app/data/orders.json');
        $this->productsFilePath = base_path('storage/app/data/products.json');
    }
    public function index()
    {
        $users = json_decode(File::get($this->usersFilePath), true);
        $orders = json_decode(File::get($this->ordersFilePath), true);
        $products = json_decode(File::get($this->productsFilePath), true);
        
        $totalUsers = count($users);
        $totalOrders = count($orders);
        $activeProducts = count($products);
        
        // Ambil pemesanan terbaru (misalnya 5 pemesanan terakhir)
        $latestOrders = array_slice($orders, -5);

        return view('admin.dashboard', compact('totalUsers', 'totalOrders', 'activeProducts', 'latestOrders'));

    }
}
