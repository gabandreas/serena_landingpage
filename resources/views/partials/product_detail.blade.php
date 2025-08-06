@php
    $data = [
        'mesin_baru' => [
            'title' => 'Mesin Baru',
            'image' => 'printer_img/large_format_printing_1.jpg',
            'description' => 'Mesin digital printing terbaru langsung dari pabrik resmi dengan teknologi tercanggih saat ini.',
            'explanation' => [
                'Kondisi 100% baru dan belum pernah dipakai.',
                'Garansi resmi dari distributor/pabrik.',
                'Cocok untuk usaha skala besar atau yang ingin investasi jangka panjang.',
            ],
            'benefits' => [
                'Performa optimal sejak awal.',
                'Minim perawatan dan risiko kerusakan.',
                'Update firmware dan dukungan teknis penuh.',
            ],
            'recommended_for' => 'Pemilik usaha yang ingin mulai dari awal dengan mesin berkualitas tinggi dan dukungan penuh.',
        ],
        'mesin_rekondisi' => [
            'title' => 'Mesin Rekondisi',
            'image' => 'printer_img/product 4.jpeg',
            'description' => 'Mesin bekas impor atau lokal yang telah diperbarui menyeluruh oleh teknisi profesional hingga performanya menyerupai baru.',
            'explanation' => [
                'Suku cadang rusak diganti baru.',
                'Diuji ulang dan diservis secara menyeluruh.',
                'Visual luar tampak baru dan bersih.',
            ],
            'benefits' => [
                'Harga lebih terjangkau daripada mesin baru.',
                'Performa mendekati baru.',
                'Cocok untuk skala usaha menengah.',
            ],
            'recommended_for' => 'Pebisnis yang ingin performa tinggi tapi dengan anggaran lebih efisien.',
        ],
        'mesin_second' => [
            'title' => 'Mesin Second',
            'image' => 'printer_img/second_machine_galery_3.jpg',
            'description' => 'Mesin digital printing yang sudah pernah digunakan sebelumnya namun masih dalam kondisi layak pakai.',
            'explanation' => [
                'Belum melalui proses rekondisi mendalam.',
                'Harga jauh lebih murah.',
                'Kondisi tergantung pemakaian sebelumnya.',
            ],
            'benefits' => [
                'Pilihan ekonomis bagi pemula.',
                'Bisa langsung digunakan (plug & play).',
                'Ideal untuk percobaan atau volume kecil.',
            ],
            'recommended_for' => 'Pemula yang ingin mencoba usaha digital printing dengan modal terbatas.',
        ],
    ];

    $product = $data[$type];
@endphp

<div class="product-info-section">
    <div class="product-image-wrapper">
        <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}">
    </div>
    <div class="product-details">
        <h3>{{ $product['title'] }}</h3>
        <p class="fs-5 text-muted">{{ $product['description'] }}</p>

        <h5 class="fw-semibold mt-4">Penjelasan</h5>
        <ul class="list-group list-group-flush mb-3">
            @foreach ($product['explanation'] as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        </ul>

        <h5 class="fw-semibold">Keunggulan</h5>
        <ul class="list-group list-group-flush mb-3">
            @foreach ($product['benefits'] as $item)
                <li class="list-group-item text-success">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ $item }}
                </li>
            @endforeach
        </ul>

        <p class="fw-semibold text-muted">📌 <em>{{ $product['recommended_for'] }}</em></p>
    </div>
</div>