<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark">Data Pemesanan</h4>
        <a href="/create_order" class="btn btn-custom">
            <i class="bi bi-plus-lg me-1"></i> Tambah Pemesanan
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Produk</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $order['customer_name'] }}</td>
                                <td>{{ $order['product_name'] }}</td>
                                <td>{{ $order['date'] }}</td>
                                <td>
                                    <span class="badge rounded-pill 
                                        {{ 
                                            $order['status'] == 'Selesai' ? 'bg-success' : 
                                            ($order['status'] == 'Proses' ? 'bg-warning text-dark' : 'bg-danger') 
                                        }}">
                                        {{ $order['status'] }}
                                    </span>
                                </td>
                                <td>
                                    <a href="/order/{{ $order['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/order/{{ $order['id'] }}/delete" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
