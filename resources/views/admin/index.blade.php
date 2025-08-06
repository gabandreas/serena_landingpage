<x-admin_layout></x-admin_layout>      
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Content -->
        <div class="admin-content">
          <!-- Row 1: Stats -->
          <div class="row g-4 mb-4">
            <div class="col-md-4">
              <div class="card card-admin p-4">
                <h6 class="card-title">Total Pengguna</h6>
                <p class="fs-3">1.245</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-admin p-4">
                <h6 class="card-title">Total Pesanan</h6>
                <p class="fs-3">859</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-admin p-4">
                <h6 class="card-title">Produk Aktif</h6>
                <p class="fs-3">35</p>
              </div>
            </div>
          </div>

          <!-- Row 2: Tabel Pemesanan Terbaru -->
          <div class="card card-admin p-4">
            <h6 class="card-title mb-3">Pemesanan Terbaru</h6>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
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
                  <tr>
                    <td>1</td>
                    <td>Rina Astuti</td>
                    <td>Serum Anti Aging</td>
                    <td>11 Mei 2025</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Sri Wahyuni</td>
                    <td>Facial Wash</td>
                    <td>10 Mei 2025</td>
                    <td><span class="badge bg-warning text-dark">Proses</span></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dewi Handayani</td>
                    <td>Toner Glowing</td>
                    <td>9 Mei 2025</td>
                    <td><span class="badge bg-danger">Dibatalkan</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- Footer -->
        <div class="admin-footer">
          &copy; 2025 Serena Skincare | Admin Panel
        </div>

      </main>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>