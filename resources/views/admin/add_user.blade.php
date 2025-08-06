<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark">Tambah Pengguna Baru</h4>
        <a href="/user_data" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="/admin/users" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control rounded-3" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control rounded-3" id="email" name="email" required>
                </div>

                <div class="mb-4">
                    <label for="phone" class="form-label fw-semibold">Telepon</label>
                    <input type="text" class="form-control rounded-3" id="phone" name="phone" required>
                </div>

                <button type="submit" class="btn btn-custom w-100">
                    <i class="bi bi-person-plus me-2"></i> Simpan Pengguna
                </button>
            </form>
        </div>
    </div>
</main>