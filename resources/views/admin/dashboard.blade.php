<x-admin_layout />

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="admin-header d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Welcome Back, Admin 👋</h2>
            <p class="text-muted">Here’s what’s happening today.</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card admin-card shadow-lg p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-primary text-white me-3">
                        <i class="bi bi-people-fill fs-4"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 text-muted">Total Pengguna</h6>
                        <h4 class="fw-semibold mb-0">{{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card admin-card shadow-lg p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-success text-white me-3">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 text-muted">Total Pesanan</h6>
                        <h4 class="fw-semibold mb-0">{{ $totalOrders }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card admin-card shadow-lg p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-warning text-dark me-3">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 text-muted">Produk Aktif</h6>
                        <h4 class="fw-semibold mb-0">{{ $activeProducts }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-lg p-4 mb-5">
        <h5 class="mb-4 fw-bold">Pemesanan Terbaru</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Produk</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latestOrders as $index => $order)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order['customer_name'] }}</td>
                            <td>{{ $order['product_name'] }}</td>
                            <td>{{ $order['date'] }}</td>
                            <td>
                                <span class="badge 
                                    {{ $order['status'] == 'Selesai' ? 'bg-success' : 
                                        ($order['status'] == 'Proses' ? 'bg-warning text-dark' : 
                                        'bg-danger') }}">
                                    {{ $order['status'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center text-muted py-3">
        &copy; 2025 Serena Print Solution | Admin Panel
    </div>
</main>