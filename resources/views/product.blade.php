<x-navbar></x-navbar>
<section id="products" class="product-section py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <button class="filter-btn d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#categoryDrawer"aria-label="Filter Products">
            <i class="bi bi-funnel-fill"></i>Filter
        </button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="productGrid">
      @foreach ($products as $product)
        <div class="col product-card {{ strtolower(str_replace(' ', '-', $product['category'] ?? 'uncategorized')) }}">
          <div class="card h-100 shadow-sm border-0">
            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="object-fit: cover; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">{{ $product['name'] }}</h5>
              <div class="accordion mt-3" id="specAccordion{{ $product['id'] }}">
                <div class="accordion-item border-0">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-light fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpec{{ $product['id'] }}">
                      Specifications
                    </button>
                  </h2>
                  <div id="collapseSpec{{ $product['id'] }}" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      {!! $product['description'] ?? '<em>Spesifikasi belum tersedia.</em>' !!}
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
<x-footer></x-footer>

<!-- Script filter kategori -->
<script>
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

