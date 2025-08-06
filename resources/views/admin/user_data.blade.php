<x-admin_layout></x-admin_layout>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark">Data Pengguna</h4>
        <a href="/create_user" class="btn btn-custom">
            <i class="bi bi-plus-circle me-2"></i> Tambah Pengguna
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle table-borderless">
                    <thead class="bg-light text-secondary fw-semibold">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                            <tr class="table-row-custom">
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['phone'] }}</td>
                                <td>
                                    <a href="/user/{{ $user['id'] }}/edit" class="btn btn-sm btn-outline-warning me-2">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="/user/{{ $user['id'] }}/delete" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash3"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada data pengguna.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>