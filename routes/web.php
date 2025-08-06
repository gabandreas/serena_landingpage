<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserDataController;
use App\Http\Controllers\Admin\UserOrderController;
use App\Http\Controllers\Admin\DashboardController as DashboardController;
use App\Http\Controllers\Admin\ProductController as ProductController;
use App\Http\Controllers\Admin\AuthController as AuthController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
//landing page routes

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/contact_us', [ContactController::class, 'index']);
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.contact');

Route::get('/about_us', function () {
    return view('about_us');
});

// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/layanan_servis', function () {
    return view('layanan_servis');
});
Route::get('/cara_pemesanan', function () {
    return view('cara_pemesanan');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/products/mesin_baru', function () {
    return view('mesin_baru');
});
Route::get('/products/mesin_rekondisi', function () {
    return view('mesin_rekondisi');
});
Route::get('/products/mesin_second', function () {
    return view('mesin_second');
});
Route::get('/products/consumables', function () {
    return view('product_consumables');
});
Route::get('/solution/large_format', function () {
    return view('solutions.large_format_digital');
});
Route::get('/solution/photo_printing', function () {
    return view('solutions.photo_printing');
});
Route::get('/solution/insutrial_printing', function () {
    return view('solutions.industrial_printing');
});
Route::get('/solution/inkjet_printers', function () {
    return view('solutions.inkjet_printers');
});
Route::get('/solution/laser_printers', function () {
    return view('solutions.laser_printers');
});
Route::get('/solution/sublimation_printers', function () {
    return view('solutions.sublimation_printers');
});
Route::get('/solution/maintenance_and_repair', function () {
    return view('solutions.maintenance');
});
Route::get('/solution/custom_solutions', function () {
    return view('solutions.custom_solutions');
});
Route::get('/solution/consultations', function () {
    return view('solutions.consultations');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/', [UserProductController::class, 'showProducts']);
Route::get('/product', [UserProductController::class, 'showCatalog']);
Route::get('/form_pembelian/{id}', [UserProductController::class, 'form_beli']);
Route::post('/submit_form', [UserProductController::class, 'store']);

Route::get('/load-product-view/{type}', function ($type) {
    return view('partials.product_detail', ['type' => $type]);
});
Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/user_data', [UserDataController ::class, 'index']);
    Route::get('/create_user', [UserDataController::class, 'create']);
    Route::post('/admin/users', [UserDataController::class, 'store']);
    Route::get('/user/{id}/edit', [UserDataController::class, 'edit']);
    Route::put('/user_update/{id}', [UserDataController::class, 'update']);
    Route::delete('/user/{id}/delete', [UserDataController::class, 'destroy']);
    Route::get('/order_data', [UserOrderController::class, 'index']);
    Route::get('/create_order', [UserOrderController::class, 'create']);
    Route::post('/admin/order', [UserOrderController::class, 'store']);
    Route::get('/order/{id}/edit', [UserOrderController::class, 'edit']);
    Route::put('/order_update/{id}', [UserOrderController::class, 'update']);
    Route::delete('/order/{id}/delete', [UserOrderController::class, 'destroy']);

    Route::get('/product_data', [ProductController::class, 'index']);
    Route::get('/create_product', [ProductController::class, 'create']);
    Route::post('/admin/products', [ProductController::class, 'store']);
    Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/admin/products/{id}', [ProductController::class, 'update']);
    Route::delete('/product/{id}/delete', [ProductController::class, 'destroy']);
});

// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('admin.auth');

// Route::get('/user_data', [UserDataController ::class, 'index']);
// Route::get('/create_user', [UserDataController::class, 'create']);
// Route::post('/admin/users', [UserDataController::class, 'store']);
// Route::get('/user/{id}/edit', [UserDataController::class, 'edit']);
// Route::put('/user_update/{id}', [UserDataController::class, 'update']);
// Route::delete('/user/{id}/delete', [UserDataController::class, 'destroy']);

// // Rute untuk Pemesanan
// Route::get('/order_data', [UserOrderController::class, 'index']);
// Route::get('/create_order', [UserOrderController::class, 'create']);
// Route::post('/admin/order', [UserOrderController::class, 'store']);
// Route::get('/order/{id}/edit', [UserOrderController::class, 'edit']);
// Route::put('/order_update/{id}', [UserOrderController::class, 'update']);
// Route::delete('/order/{id}/delete', [UserOrderController::class, 'destroy']);

// Route::get('/product_data', [ProductController::class, 'index']);
// Route::get('/create_product', [ProductController::class, 'create']);
// Route::post('/admin/products', [ProductController::class, 'store']);
// Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/{id}', [ProductController::class, 'update']);
// Route::delete('/product/{id}/delete', [ProductController::class, 'destroy']);


return redirect('/admin/users')->with('success', 'Pengguna berhasil ditambahkan.');

//Route Solutions
