<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-dark">Tambah Produk</h4>
    <a href="/product_data" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
  </div>

  <div class="card shadow-sm border-0">
    <div class="card-body p-4">
      <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Nama Produk</label>
          <input type="text" class="form-control rounded-3" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label fw-semibold">Kategori</label>
          <select class="form-select rounded-3" id="category" name="category" required>
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="Mesin Baru">Mesin Baru</option>
            <option value="Mesin Rekondisi">Mesin Rekondisi</option>
            <option value="Mesin Seken">Mesin Seken</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label fw-semibold">Deskripsi</label>
          <textarea class="form-control rounded-3" id="description" name="description" rows="4" required></textarea>
        </div>

        {{-- <div class="mb-3">
          <label for="price" class="form-label fw-semibold">Harga</label>
          <input type="number" class="form-control rounded-3" id="price" name="price" required>
        </div> --}}

        <div class="mb-4">
          <label for="image" class="form-label fw-semibold">Gambar</label>
          <input type="file" class="form-control rounded-3" id="image" name="image" required>
        </div>

        <button type="submit" class="btn btn-custom w-100">
          <i class="bi bi-save me-2"></i> Simpan Produk
        </button>
      </form>
    </div>
  </div>
</main>
