<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark">Data Produk</h4>
        <a href="/create_product" class="btn btn-custom">
            <i class="bi bi-plus-circle me-2"></i> Tambah Produk
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light text-secondary fw-semibold">
                        <tr>
                            <th style="width:5%;">No</th>
                            <th>Nama Produk</th>
                            <th>Category</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th style="width:20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $index => $product)
                            <tr class="table-row-custom">
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $product['name'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ Str::limit($product['description'], 50) }}</td>
                                <td>
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-rounded" style="width:80px; height:80px; object-fit:cover;">
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="/product/{{ $product['id'] }}/edit" class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="/product/{{ $product['id'] }}/delete" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada produk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
