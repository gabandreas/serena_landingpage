<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark">Edit Pemesanan</h4>
        <a href="/order_data" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="/order_update/{{ $order['id'] }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="customer_name" class="form-label fw-semibold">Nama Pemesan</label>
                    <input type="text" class="form-control rounded-3" id="customer_name" name="customer_name" value="{{ $order['customer_name'] }}" required>
                </div>

                <div class="mb-3">
                    <label for="product_name" class="form-label fw-semibold">Produk</label>
                    <input type="text" class="form-control rounded-3" id="product_name" name="product_name" value="{{ $order['product_name'] }}" required>
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label fw-semibold">Status</label>
                    <select class="form-select rounded-3" id="status" name="status" required>
                        <option value="Proses" {{ $order['status'] == 'Proses' ? 'selected' : '' }}>Proses</option>
                        <option value="Selesai" {{ $order['status'] == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Dibatalkan" {{ $order['status'] == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-custom w-100">
                    <i class="bi bi-check2-circle me-2"></i> Perbarui Pemesanan
                </button>
            </form>
        </div>
    </div>
</main>
