<x-navbar></x-navbar>
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
<x-footer></x-footer>
<!-- Bootstrap JS -->

