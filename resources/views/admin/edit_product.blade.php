<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-dark">Edit Produk</h4>
    <a href="/product_data" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
  </div>

  <div class="card shadow-sm border-0">
    <div class="card-body p-4">
      <form action="/admin/products/{{ $product['id'] }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Nama Produk</label>
          <input type="text" class="form-control rounded-3" id="name" name="name" value="{{ $product['name'] }}" required>
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label fw-semibold">Deskripsi</label>
          <textarea class="form-control rounded-3" id="description" name="description" rows="3" required>{{ $product['description'] }}</textarea>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label fw-semibold">Kategori</label>
          <select class="form-select rounded-3" id="category" name="category" required>
            <option value="Mesin Baru" {{ $product['category']=='Mesin Baru'?'selected':'' }}>Mesin Baru</option>
            <option value="Mesin Rekondisi" {{ $product['category']=='Mesin Rekondisi'?'selected':'' }}>Mesin Rekondisi</option>
            <option value="Mesin Seken" {{ $product['category']=='Mesin Seken'?'selected':'' }}>Mesin Seken</option>
          </select>
        </div>

        <div class="mb-4">
          <label for="image" class="form-label fw-semibold">Gambar Produk (opsional)</label>
          <input type="file" class="form-control rounded-3" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-custom w-100">
          <i class="bi bi-check2-circle me-2"></i> Perbarui Produk
        </button>
      </form>
    </div>
  </div>
</main>
