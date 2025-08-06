<x-navbar></x-navbar>
<div style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); padding: 80px 0;">
  <div class="container" style="max-width: 600px;">
    <div class="card shadow p-5 rounded-4 bg-white">
      <h2 class="text-center mb-4" style="font-weight: 700; color: #333;">Hubungi Kami</h2>
      <p class="text-center text-secondary mb-5">Kami siap membantu Anda. Kirim pesan dan kami akan segera merespon!</p>

      <div id="alert-container" class="mb-4"></div>

      <form id="form-kontak-printer" style="gap: 1.5rem; display: flex; flex-direction: column;">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
          <label for="nama">Nama</label>
        </div>

        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
          <label for="email">Email</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          <label for="subject">Subject</label>
        </div>

        <div class="form-floating">
          <textarea class="form-control" id="question" name="question" placeholder="Tulis pertanyaan Anda" rows="4" required style="height: 100px;"></textarea>
          <label for="question">Pertanyaan</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="setuju" name="setuju" required>
          <label class="form-check-label" for="setuju" style="font-size: 0.9rem; color: #555;">
            Saya bersedia informasi saya disimpan untuk keperluan layanan
          </label>
        </div>

        <button type="submit" class="btn btn-warning btn-lg fw-bold shadow-sm" style="border-radius: 30px; transition: background-color 0.3s; position: relative; overflow: hidden;">
          <span id="btn-text">Kirim Pesan</span>
          <span id="btn-loader" style="display:none; position: absolute; right: 20px; top: 50%; transform: translateY(-50%);">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin: auto; background: none; display: block;" width="20" height="20" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#fff" stroke-width="8" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
              </circle>
            </svg>
          </span>
        </button>
      </form>
    </div>
  </div>
</div>


<script>
  const form = document.getElementById('form-kontak-printer');
  const btn = form.querySelector('button[type="submit"]');
  const btnText = document.getElementById('btn-text');
  const btnLoader = document.getElementById('btn-loader');
  const alertContainer = document.getElementById('alert-container');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Disable button & show loader
    btn.disabled = true;
    btnText.textContent = 'Please wait...';
    btnLoader.style.display = 'inline-block';
    alertContainer.innerHTML = '';

    const formData = new FormData(form);

    fetch('/send-email', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Accept': 'application/json',
      },
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        showAlert(data.message || 'Pesan berhasil dikirim!', 'success');
        form.reset();
      } else {
        showAlert(data.message || 'Gagal mengirim pesan.', 'danger');
      }
    })
    .catch(error => {
      console.error(error);
      showAlert('Terjadi kesalahan saat mengirim data.', 'danger');
    })
    .finally(() => {
      btn.disabled = false;
      btnText.textContent = 'Kirim Pesan';
      btnLoader.style.display = 'none';
    });

  });

  function showAlert(message, type) {
    const colorMap = {
      success: '#28a745',
      danger: '#dc3545',
      warning: '#ffc107',
      info: '#17a2b8'
    };
    const bgColor = colorMap[type] || '#6c757d';

    alertContainer.innerHTML = `
      <div style="
        background-color: ${bgColor};
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 1rem;
        position: relative;
        animation: fadeInDown 0.5s ease forwards;
      ">
        ${message}
        <button onclick="this.parentElement.style.display='none';" style="
          position: absolute;
          top: 10px;
          right: 12px;
          background: transparent;
          border: none;
          color: white;
          font-size: 1.2rem;
          cursor: pointer;
          font-weight: 700;
          line-height: 1;
        ">×</button>
      </div>
    `;
  }
</script>
