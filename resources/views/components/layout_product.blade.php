<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #223668;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="/">Serena Print Solution</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cart') ? 'active' : '' }}" href="/cart">Keranjang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Fungsi untuk menambah produk ke keranjang
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const productId = e.target.getAttribute('data-product-id');
            const productName = e.target.getAttribute('data-product-name');
            const productPrice = e.target.getAttribute('data-product-price');
            
            // Membuat objek produk
            const product = {
                id: productId,
                name: productName,
                price: parseFloat(productPrice),
                quantity: 1 // Jumlah produk
            };
            
            // Mendapatkan keranjang dari localStorage atau buat keranjang baru
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Mengecek jika produk sudah ada di keranjang
            const existingProductIndex = cart.findIndex(item => item.id === productId);

            if (existingProductIndex !== -1) {
                // Jika produk sudah ada, update jumlahnya
                cart[existingProductIndex].quantity += 1;
            } else {
                // Jika produk belum ada, tambahkan ke keranjang
                cart.push(product);
            }

            // Menyimpan keranjang ke localStorage
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Memberikan feedback kepada pengguna
            alert(`${productName} telah ditambahkan ke keranjang.`);
        });
    });
</script>