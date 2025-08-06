<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serena Print Solution</title>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />        
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('printer_img/logo_serena.png') }}" alt="Serena Logo" class="logo-img">
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('solution*') ? 'active' : '' }}" href="#" id="solutionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solution</a>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="solutionDropdown">
            <li><h6 class="dropdown-header">Digital Printing Solutions</h6></li>
            <li><a class="dropdown-item" href="/solution/large_format">Large Format Printing</a></li>
            <li><a class="dropdown-item" href="/solution/photo_printing">Photo Printing Machines</a></li>
            <li><a class="dropdown-item" href="/solution/insutrial_printing">Industrial Printing</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header">Printing Machines</h6></li>
            <li><a class="dropdown-item" href="/solution/inkjet_printers">Inkjet Printers</a></li>
            <li><a class="dropdown-item" href="/solution/laser_printers">Laser Printers</a></li>
            <li><a class="dropdown-item" href="/solution/sublimation_printers">Sublimation Printers</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header">Support & Services</h6></li>
            <li><a class="dropdown-item" href="/solution/maintenance_and_repair">Maintenance & Repair</a></li>
            <li><a class="dropdown-item" href="/solution/custom_solutions">Custom Solutions</a></li>
            <li><a class="dropdown-item" href="/solution/consultations">Consultation</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="/contact_us">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="/about_us">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<script>
    const swiper = new Swiper(".produkSwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2,
        },
        480: {
          slidesPerView: 1,
        }
      }
    });
</script>