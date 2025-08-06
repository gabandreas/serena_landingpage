<x-navbar></x-navbar>
<div class="hero position-relative">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide d-flex align-items-center justify-content-start text-white text-shadow position-relative" style="background-image: url('{{ asset('printer_img/header.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                    <div class="dark-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    <div class="container position-relative text-white">
                        <h1 class="display-3 fw-bold mb-3">Your<span class="hero-highlight">Essential Partner</span><br>to Your <span class="hero-highlight">Business</span></h1>
                        <div class="mt-2 fs-4 fst-italic text-light-emphasis d-flex align-items-center gap-2">
                            <span>with</span>
                            <img src="{{ asset('printer_img/logo_serena.png') }}" alt="Serena Print Solution" class="hero-logo">
                        </div>
                        <a href="javascript:void(0)" class="btn btn-warning btn-lg mt-4 px-5 py-3 shadow text-capitalize" data-bs-toggle="modal" data-bs-target="#catalogModal">
                            Lihat Katalog
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide position-relative" style="background-image: url('{{ asset('printer_img/product 4.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                    <div class="dark-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide position-relative" style="background-image: url('{{ asset('printer_img/product 3.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
                    <div class="dark-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    <div class="py-5"></div>
            <div class="product-category py-5">
                <div class="container text-center">
                    <h2 class="mb-5 fw-bold">Find the Perfect Printer for Your Business</h2>
                    <div class="row g-4">
                @php
                    $products = [
                        ['key' => 'mesin_baru', 'title' => 'Mesin Baru', 'img' => 'printer_img/mesin_baru.jpg'],
                        ['key' => 'mesin_rekondisi', 'title' => 'Mesin Rekondisi', 'img' => 'printer_img/mesin_rekondisi.jpg'],
                        ['key' => 'mesin_second', 'title' => 'Mesin Second', 'img' => 'printer_img/mesin_second.jpg'],
                    ];
                @endphp

                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100 hover-scale transition" onclick="loadProduct('{{ $product['key'] }}')" role="button">
                        <div class="position-relative">
                            <img src="{{ asset($product['img']) }}" class="img-fluid rounded w-100" alt="{{ $product['title'] }}">
                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center rounded">
                                <h3 class="text-white fw-bold fs-4">{{ $product['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content rounded-4 shadow-lg border-0">
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold" id="categoryModalLabel">Category Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body px-4 py-3" id="categoryModalBody">
                        <div class="text-center text-muted">Memuat detail produk...</div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="best-products py-5 bg-white">
                <div class="container text-center">
                    <h2 class="fw-bold mb-5">Our Best-Selling Products</h2>
                    <div class="row g-4">
                        <!-- Product 1 -->
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('printer_img/large_format_printing_1.jpg') }}" class="card-img-top rounded-top" alt="Best Product 1">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold">High-Speed Printer</h5>
                                    <p class="card-text text-secondary">Ideal for bulk business printing with exceptional clarity and speed.</p>
                                <div class="accordion mt-3" id="accordionProduct1">
                                    <div class="accordion-item border">
                                        <h2 class="accordion-header" id="headingOneProduct1">
                                            <button class="accordion-button collapsed py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneProduct1" aria-expanded="false" aria-controls="collapseOneProduct1">
                                                Specifications
                                            </button>
                                        </h2>
                                        <div id="collapseOneProduct1" class="accordion-collapse collapse" aria-labelledby="headingOneProduct1" data-bs-parent="#accordionProduct1">
                                            <div class="accordion-body small text-start text-secondary">
                                                <ul class="mb-0">
                                                    <li>Print Speed: 60 ppm</li>
                                                    <li>Resolution: 1200 x 2400 dpi</li>
                                                    <li>Connectivity: Ethernet, USB 3.0</li>
                                                    <li>Paper Size: A3, A4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('printer_img/second_machine_galery_3.jpg') }}" class="card-img-top rounded-top" alt="Best Product 2">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Eco Tank Printer</h5>
                                <p class="card-text text-secondary">Cost-saving printer with eco-tank technology and durable performance.</p>
                                <div class="accordion mt-3" id="accordionProduct2">
                                    <div class="accordion-item border">
                                        <h2 class="accordion-header" id="headingOneProduct2">
                                            <button class="accordion-button collapsed py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneProduct2" aria-expanded="false" aria-controls="collapseOneProduct2">
                                                Specifications
                                            </button>
                                        </h2>
                                        <div id="collapseOneProduct2" class="accordion-collapse collapse" aria-labelledby="headingOneProduct2" data-bs-parent="#accordionProduct2">
                                            <div class="accordion-body small text-start text-secondary">
                                                <ul class="mb-0">
                                                    <li>Print Technology: EcoTank</li>
                                                    <li>Ink System: Refillable tanks</li>
                                                    <li>Connectivity: Wi-Fi, USB</li>
                                                    <li>Power Saving: Yes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('printer_img/second_machine_4.jpeg') }}" class="card-img-top rounded-top" alt="Best Product 3">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Label Printer</h5>
                                <p class="card-text text-secondary">Perfect for packaging and logistics with crisp, smudge-free prints.</p>
                                <div class="accordion mt-3" id="accordionProduct3">
                                    <div class="accordion-item border">
                                        <h2 class="accordion-header" id="headingOneProduct3">
                                            <button class="accordion-button collapsed py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneProduct3" aria-expanded="false" aria-controls="collapseOneProduct3">
                                                Specifications
                                            </button>
                                        </h2>
                                        <div id="collapseOneProduct3" class="accordion-collapse collapse" aria-labelledby="headingOneProduct3" data-bs-parent="#accordionProduct3">
                                            <div class="accordion-body small text-start text-secondary">
                                                <ul class="mb-0">
                                                    <li>Print Type: Thermal Transfer</li>
                                                    <li>Label Size: Customizable</li>
                                                    <li>Speed: 150 mm/sec</li>
                                                    <li>Durability: Water-resistant output</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('printer_img/recondition_machine_galery_6.jpeg') }}" class="card-img-top rounded-top" alt="Best Product 4">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">All-in-One Printer</h5>
                                <p class="card-text text-secondary">Multifunctional printer with scan, copy, and wireless print features.</p>
                                <div class="accordion mt-3" id="accordionProduct4">
                                    <div class="accordion-item border">
                                        <h2 class="accordion-header" id="headingOneProduct4">
                                            <button class="accordion-button collapsed py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneProduct4" aria-expanded="false" aria-controls="collapseOneProduct4">
                                                Specifications
                                            </button>
                                        </h2>
                                        <div id="collapseOneProduct4" class="accordion-collapse collapse" aria-labelledby="headingOneProduct4" data-bs-parent="#accordionProduct4">
                                            <div class="accordion-body small text-start text-secondary">
                                                <ul class="mb-0">
                                                    <li>Functions: Print, Scan, Copy</li>
                                                    <li>Wireless: Yes (Wi-Fi Direct)</li>
                                                    <li>Print Speed: 30 ppm</li>
                                                    <li>Scanner Type: Flatbed</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="consumable-products py-5 bg-light" style="align-content: center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left: Text Content -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">
                            Essential Consumables for Your Digital Printing Needs
                        </h2>
                        <p class="mb-4 fs-5 text-secondary">
                            Discover high-quality inks, specialty papers, and accessories that keep your printers running smoothly and your prints looking perfect. Whether you need vibrant colors or durable materials, we’ve got you covered.
                        </p>
                        <div class="d-flex gap-3 justify-content-center">
                            <a href="{{ url('/products/consumables') }}" class="btn btn-warning btn-lg px-4 shadow" data-bs-toggle="modal" data-bs-target="#consumablesModal">
                                Catalog
                            </a>
                            <button type="button" class="btn btn-outline-warning btn-lg px-4 shadow" data-bs-toggle="modal" data-bs-target="#kontakModal">
                                Contact Us
                            </button>
                        </div>
                </div>
                <!-- Right: Image Carousel -->
                <div class="col-md-6">
                    <div id="consumableCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="{{ asset('printer_img/consumable 1_img.jpg') }}" class="d-block w-100" alt="High Quality Ink">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('printer_img/consumable 2_img.jpg') }}" class="d-block w-100" alt="Specialty Paper">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('printer_img/consumable 3_img.jpg') }}" class="d-block w-100" alt="Printing Rolls">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('printer_img/consumable 4_img.jpg') }}" class="d-block w-100" alt="Printing Accessories">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#consumableCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#consumableCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="product-advantages">
        <div class="container">
            <h2 class="section-title">Why Choose Our Products?</h2>
            <div class="advantages-grid">
            <div class="advantage-card">
                <div class="icon-wrapper">
                    <img src="{{ asset('printer_img/star.svg') }}" alt="High Speed" />          
                </div>
                <h3>Premium Print Quality</h3>
                <p>Crisp detail and vibrant color output, ensuring every print represents your brand with perfection.</p>
            </div>
            <div class="advantage-card">
                <div class="icon-wrapper">
                    <img src="{{ asset('printer_img/speed.svg') }}" alt="High Speed" />
                </div>
                <h3>High-Speed Performance</h3>
                <p>Built for business, our printers offer lightning-fast output to match your production pace.</p>
            </div>
            <div class="advantage-card">
                <div class="icon-wrapper">
                    <img src="{{ asset('printer_img/headset.svg') }}" alt="Support" />
                </div>
                <h3>Expert Support</h3>
                <p>Our team is ready to assist with setup, maintenance, and troubleshooting — whenever you need.</p>
            </div>
            </div>
        </div>
        </div>
        <br><br><br><br><br>
        <div class="partners-section">
            <div class="container">
                <h2 class="fw-bold">Trusted by Industry Leaders</h2>
                <p class="fs-5">Kami bangga menjadi partner resmi dan reseller eksklusif dari merek-merek ternama berikut ini:</p>
                <div class="partner-logos">
                    <img src="{{ asset('printer_img/epson_logo.jpg') }}" alt="Epson">
                    <img src="{{ asset('printer_img/roland_logo.jpg') }}" alt="Roland">
                    <img src="{{ asset('printer_img/hp_logo.jpg') }}" alt="HP">
                    <img src="{{ asset('printer_img/mimaki_logo.jpg') }}" alt="Mimaki">
                    <img src="{{ asset('printer_img/canon_logo.jpg') }}" alt="Canon">
                    <img src="{{ asset('printer_img/brother_logo.jpg') }}" alt="Brother">
                    <img src="{{ asset('printer_img/agfa_logo.jpg') }}" alt="Agfa">
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="elite-testimonial-container">
            <h2 class="elite-testimonial-title">What Our Clients Say</h2>
            <div class="row g-4 justify-content-center">
                <!-- Testimonial Cards -->
                <!-- Client 1 -->
                <div class="col-md-4">
                    <div class="elite-testimonial-card">
                        <p class="elite-testimonial-quote">"Mesin digital printingnya luar biasa..."</p>
                        <div class="elite-testimonial-info">
                            <img src="{{ asset('printer_img/client_logo.jpg') }}" alt="Client 1" class="elite-testimonial-photo">
                            <div>
                                <h6 class="elite-testimonial-name">Jonathan Wirawan</h6>
                                <small class="elite-testimonial-position">CEO, Prestige Printing Co.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client 2 -->
                <div class="col-md-4">
                    <div class="elite-testimonial-card">
                        <p class="elite-testimonial-quote">"Rekomendasi mesin rekondisi yang saya dapatkan..."</p>
                        <div class="elite-testimonial-info">
                            <img src="{{ asset('printer_img/client_2_logo.jpg') }}" alt="Client 2" class="elite-testimonial-photo">
                            <div>
                                <h6 class="elite-testimonial-name">Maya Sari</h6>
                                <small class="elite-testimonial-position">Owner, LuxePrint Studio</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client 3 -->
                <div class="col-md-4">
                    <div class="elite-testimonial-card">
                        <p class="elite-testimonial-quote">"Pelayanan personal dan mesin yang kami gunakan..."</p>
                        <div class="elite-testimonial-info">
                            <img src="{{ asset('printer_img/client_logo.jpg') }}" alt="Client 3" class="elite-testimonial-photo">
                            <div>
                                <h6 class="elite-testimonial-name">Aditya Nugroho</h6>
                                <small class="elite-testimonial-position">Founder, Elite Prints</small>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

{{-- Modal Catalog --}}
<div class="modal fade" id="catalogModal" tabindex="-1" aria-labelledby="catalogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="catalogModalLabel">Katalog Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body p-0">
        <!-- Pindahkan section products ke sini -->
        <section id="products" class="product-section">
          <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center mb-4 px-3">
              <button class="filter-btn d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#categoryDrawer" aria-label="Filter Products">
                <i class="bi bi-funnel-fill"></i>Filter
              </button>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 px-3" id="productGrid">
              @foreach ($products_catalog as $catalog)
                <div class="col product-card {{ strtolower(str_replace(' ', '-', $catalog['category'] ?? 'uncategorized')) }}">
                  <div class="card h-100 shadow-sm border-0">
                      <img src="{{ $catalog['image'] ?? asset('default.jpg') }}" class="card-img-top" alt="{{ $catalog['name'] ?? 'Produk' }}" style="object-fit: cover; height: 250px;">
                      <div class="card-body">
                        <h5 class="card-title">{{ $catalog['name'] }}</h5>
                        <div class="accordion mt-3" id="specAccordion{{ $catalog['id'] }}">
                        <div class="accordion-item border-0">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-light fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpec{{ $catalog['id'] }}">
                              Specifications
                            </button>
                          </h2>
                          <div id="collapseSpec{{ $catalog['id'] }}" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              {!! $catalog['description'] ?? '<em>Spesifikasi belum tersedia.</em>' !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- Offcanvas Kategori -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="categoryDrawer">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Filter Kategori</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group">
      <li class="list-group-item list-group-item-action active" onclick="filterCategory('all')">Semua</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Baru')">Mesin Baru</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Rekondisi')">Mesin Rekondisi</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Seken')">Mesin Second</li>
    </ul>
  </div>
</div>

{{-- Modal Catalog --}}
<div class="modal fade" id="consumablesModal" tabindex="-1" aria-labelledby="consumablesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="consumablesModalLabel">Katalog Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body p-0">
        <!-- Pindahkan section products ke sini -->
        <div class="container py-5">
            <h1 class="text-center fw-bold mb-5" style="font-family: 'Montserrat', sans-serif;">
                Consumables Catalog
            </h1>
            <!-- Produk Grid -->
            <div class="row g-4 mb-5">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <img src="{{ asset('printer_img/consumables.jpg') }}" class="card-img-top rounded-top-4" alt="High-Quality Cyan Ink">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">High-Quality Cyan Ink</h5>
                            <p class="card-text text-muted">Vibrant and long-lasting cyan ink perfect for all digital printers. Ensures sharp and bright prints every time.</p>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <img src="{{ asset('printer_img/consumables_2.jpg') }}" class="card-img-top rounded-top-4" alt="Specialty Glossy Paper">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Specialty Glossy Paper</h5>
                            <p class="card-text text-muted">Premium glossy paper designed for vivid photo-quality prints. Ideal for brochures and marketing materials.</p>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <img src="{{ asset('printer_img/consumables_3.jpg') }}" class="card-img-top rounded-top-4" alt="Printer Cleaning Kit">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Printer Cleaning Kit</h5>
                            <p class="card-text text-muted">Essential cleaning tools to maintain your printer’s performance and prolong its lifespan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Specifications Section -->
            <div class="specifications bg-light p-4 rounded-4 shadow-sm">
                <h2 class="fw-bold mb-3">Specifications</h2>

                <div class="accordion" id="specificationsAccordion">
                    <div class="accordion-item rounded-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                High-Quality Cyan Ink
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                            <div class="accordion-body text-muted">
                                <ul>
                                    <li>Volume: 500ml bottle</li>
                                    <li>Color: Cyan (Blue)</li>
                                    <li>Compatibility: All major digital printers</li>
                                    <li>Drying time: 10-15 seconds</li>
                                    <li>Non-toxic and eco-friendly formulation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 shadow-sm mt-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Specialty Glossy Paper
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#specificationsAccordion">
                            <div class="accordion-body text-muted">
                                <ul>
                                    <li>Size: A4 (210 x 297 mm)</li>
                                    <li>Weight: 180 gsm</li>
                                    <li>Finish: Glossy</li>
                                    <li>Suitable for: Photo prints, marketing flyers, brochures</li>
                                    <li>Paper type: Acid-free, high brightness</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 shadow-sm mt-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Printer Cleaning Kit
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#specificationsAccordion">
                            <div class="accordion-body text-muted">
                                <ul>
                                    <li>Includes: Cleaning swabs, wipes, and solution</li>
                                    <li>Compatible with most inkjet and laser printers</li>
                                    <li>Improves print quality and prevents clogging</li>
                                    <li>Safe and easy to use</li>
                                    <li>Extends printer life span</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Offcanvas Kategori -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="categoryDrawer">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Filter Kategori</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group">
      <li class="list-group-item list-group-item-action active" onclick="filterCategory('all')">Semua</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Baru')">Mesin Baru</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Rekondisi')">Mesin Rekondisi</li>
      <li class="list-group-item list-group-item-action" onclick="filterCategory('Mesin Seken')">Mesin Second</li>
    </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kontakModal" tabindex="-1" aria-labelledby="kontakModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow rounded-4">
      <div class="modal-body p-5">
        <h2 class="text-center mb-4" style="font-weight: 700; color: #333;">Hubungi Kami</h2>
        <p class="text-center text-secondary mb-4">Kami siap membantu Anda. Kirim pesan dan kami akan segera merespon!</p>

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
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
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


function loadProduct(type) {
    const modalBody = document.getElementById('categoryModalBody');
    const modalTitle = document.getElementById('categoryModalLabel');

    modalTitle.innerText = 'Detail Produk';
    modalBody.innerHTML = `<div class="text-center text-muted py-5">
        <div class="spinner-border text-primary mb-3" role="status"></div><br>
        Memuat detail produk...
    </div>`;

    fetch(`/load-product-view/${type}`)
        .then(res => res.text())
        .then(html => {
            modalBody.innerHTML = html;
        }).catch(() => {
            modalBody.innerHTML = '<div class="text-danger text-center py-5">Gagal memuat data produk.</div>';
        });

    const modal = new bootstrap.Modal(document.getElementById('categoryModal'));
    modal.show();
}
 

 
</script>
<script>
    //filter category product
 function filterCategory(category) {
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
      if (category === 'all') {
        card.style.display = 'block';
      } else {
        const className = category.toLowerCase().replace(/\s+/g, '-');
        card.style.display = card.classList.contains(className) ? 'block' : 'none';
      }
    });

    const items = document.querySelectorAll('.list-group-item');
    items.forEach(item => item.classList.remove('active'));
    [...items].find(i => i.textContent.trim() === category || (category === 'all' && i.textContent.trim() === 'Semua'))?.classList.add('active');
  }
</script>
<x-footer></x-footer>

<!-- Bootstrap JS -->



