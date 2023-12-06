<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore Jogja! - Vancana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script defer src="app.js"></script>
  </head>
  <body>
    <!-- navbar mulai -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">
          Vancana
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
          <ul class="nav nav-pills">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-stick" href="#kota" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Kota</a>
                <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item rounded-2 active" href="kota.php">Pergi ke halaman</a></li>
                  <li><a class="dropdown-item rounded-2" href="kota.php#destinasi">Destinasi</a></li>
                  <li><a class="dropdown-item rounded-2" href="kota.php#kuliner">Kuliner</a></li>
                  <li><a class="dropdown-item rounded-2" href="kota.php#hotel">Hotel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item rounded-2" href="https://www.google.com/maps/place/Yogyakarta,+Yogyakarta+City,+Special+Region+of+Yogyakarta/@-7.7970987,110.4301566,11z/data=!4m6!3m5!1s0x2e7a5787bd5b6bc5:0x21723fd4d3684f71!8m2!3d-7.7955798!4d110.3694896!16zL20vMGRnNnl4?entry=ttu" target="_blank">Maps</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-stick" href="#bantul" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Bantul</a>
                <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item rounded-2 active" href="bantul.php">Pergi ke halaman</a></li>
                  <li><a class="dropdown-item rounded-2" href="bantul.php#destinasi">Destinasi</a></li>
                  <li><a class="dropdown-item rounded-2" href="bantul.php#kuliner">Kuliner</a></li>
                  <li><a class="dropdown-item rounded-2" href="bantul.php#hotel">Hotel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item rounded-2" href="https://www.google.com/maps/place/Bantul+Regency,+Special+Region+of+Yogyakarta/@-7.8977342,110.0508869,11z/data=!3m1!4b1!4m6!3m5!1s0x2e7a55c76cdc539f:0x3027a76e352bc00!8m2!3d-7.9190169!4d110.3785438!16zL20vMGRmY2Mz?entry=ttu" target="_blank">Maps</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-stick" href="#kulonprogo" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Kulon Progo</a>
                <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item rounded-2 active" href="kulon_progo.php">Pergi ke halaman</a></li>
                  <li><a class="dropdown-item rounded-2" href="kulon_progo#destinasi">Destinasi</a></li>
                  <li><a class="dropdown-item rounded-2" href="kulon_progo#kuliner">Kuliner</a></li>
                  <li><a class="dropdown-item rounded-2" href="kulon_progo#hotel">Hotel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item rounded-2" href="https://www.google.com/maps/place/Kulon+Progo+Regency,+Special+Region+of+Yogyakarta/@-7.8121219,109.9793246,11z/data=!3m1!4b1!4m6!3m5!1s0x2e7ae554b4872e5d:0x3027a76e352bbf0!8m2!3d-7.8266798!4d110.1640846!16zL20vMDN4NGZr?entry=ttu" target="_blank">Maps</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-stick" href="#sleman" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Sleman</a>
                <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item rounded-2 active" href="sleman.php">Pergi ke halaman</a></li>
                  <li><a class="dropdown-item rounded-2" href="sleman#destinasi">Destinasi</a></li>
                  <li><a class="dropdown-item rounded-2" href="sleman#kuliner">Kuliner</a></li>
                  <li><a class="dropdown-item rounded-2" href="sleman#khotel">Hotel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item rounded-2" href="https://www.google.com/maps/place/Sleman+Regency,+Special+Region+of+Yogyakarta/@-7.6893463,110.2164606,11z/data=!3m1!4b1!4m6!3m5!1s0x2e7a5ee1c5671249:0x3027a76e352bc20!8m2!3d-7.7325213!4d110.402376!16s%2Fg%2F11b_2jgvc4?entry=ttu" target="_blank">Maps</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-stick" href="#gunungkidul" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Gunung Kidul</a>
                <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item rounded-2 active" href="gunung_kidul.php">Pergi ke halaman</a></li>
                  <li><a class="dropdown-item rounded-2" href="gunung_kidul#destinasi">Destinasi</a></li>
                  <li><a class="dropdown-item rounded-2" href="gunung_kidul#kuliner">Kuliner</a></li>
                  <li><a class="dropdown-item rounded-2" href="gunung_kidul#hotel">Hotel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item rounded-2" href="https://www.google.com/maps/place/Gunung+Kidul+Regency,+Special+Region+of+Yogyakarta/@-7.9928124,110.41712,11z/data=!3m1!4b1!4m6!3m5!1s0x2e7bb3a693c3d897:0x3027a76e352bc10!8m2!3d-8.0305091!4d110.6168921!16s%2Fm%2F027g3sd?entry=ttu" target="_blank">Maps</a></li>
                </ul>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary rounded-pill" href="login.php">Login</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- navbar selesai -->

    <!-- hero mulai -->
    <section id="home" class="hero">

      <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <div id="carouselExampleHome" class="carousel slide carousel-fade shadow-lg " data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/tugu.jpg" class="d-block rounded w-100" alt="" style="height: 45vh; object-fit:cover;" loading="lazy">
                </div>
                <div class="carousel-item">
                <img src="img/jalan_malioboro.jpeg" class="d-block rounded w-100" alt="" style="height: 45vh; object-fit:cover;" loading="lazy">
                </div>
                <div class="carousel-item">
                <img src="img/prambanan.jpg" class="d-block rounded w-100" alt="" style="height: 45vh; object-fit:cover;" loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-2 mb-3">Rencanakan liburanmu ke Jogja!</h1>
            <p class="lead">Nikmati liburan seru di Jogja dengan menjelajahi seluruh keindahannya, Jadikan setiap momen spesial dalam petualangan Anda di kota ini sekarang!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a type="button" href="#jumbotron" class="btn btn-primary btn-lg px-4 me-md-2 my-2 btn-explore">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    <!-- hero selesai -->

    <!-- jumbotron mulai -->
    <section id="jumbotron">
      <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 py-3">Sulit merencanakan liburanmu ke Jogja?</h1>
          <p class="col-lg-8 mx-auto lead">
            Jangan khawatir! Kami hadir untuk membuat liburanmu di Jogja menjadi tak terlupakan. Temukan pesona kota budaya ini dengan panduan eksklusif kami, mulai dari destinasi wisata ikonik hingga kuliner lezat. Nikmati setiap momen tanpa kerumitan perencanaan. Jadikan liburanmu di Jogja sempurna bersama kami!
          </p>
        </div>
      </div>
    </section>
    <!-- jumbotron selesai -->

    
    <!-- kota -->
    <section id="kota">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.98371945908!2d110.33364501191079!3d-7.803163419035966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1701729005127!5m2!1sen!2sid" width="450" height="450" style="border:0; border-radius:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Kota Yogyakarta</h1>
            <p class="lead">
            Kota Yogyakarta (Jawa: ꦔꦪꦺꦴꦒꦾꦏꦂꦠ) adalah ibu kota daerah istimewa sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya Jawa.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="kota.php" class="btn btn-primary btn-lg px-4 me-md-2 tombol-transisi">Explore now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
          
    <!-- bantul -->
    <section id="bantul">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63230.901311138!2d110.28638461231068!3d-7.90224301465702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a55fed76d37e9%3A0xe79720853fbaadd8!2sBantul%2C%20Bantul%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1701729062224!5m2!1sen!2sid" width="450" height="450" style="border:0; border-radius:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Kabupaten Bantul</h1>
            <p class="lead">
              Bantul (Jawa: ꦧꦤ꧀ꦠꦸꦭ꧀) adalah sebuah wilayah kabupaten yang terletak di Daerah Istimewa Yogyakarta, Indonesia. Ibu kotanya adalah Kapanewon Bantul.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="bantul.php" class="btn btn-primary btn-lg px-4 me-md-2 tombol-transisi">Explore now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- kulon progo -->
    <section id="kulonprogo">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252978.5111884435!2d109.97932464231322!3d-7.812121850491212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ae554b4872e5d%3A0x3027a76e352bbf0!2sKulon%20Progo%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1701730713884!5m2!1sen!2sid" width="450" height="450" style="border:0; border-radius:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Kabupaten Kulon Progo</h1>
            <p class="lead">
              Kulon Progo atau Kulonprogo (Jawa: ꦏꦸꦭꦺꦴꦤ꧀ꦥꦿꦒ) adalah sebuah kabupaten yang terletak di Daerah Istimewa Yogyakarta, Indonesia. Ibu kotanya adalah Kapanewon Wates.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="kulon_progo.php" class="btn btn-primary btn-lg px-4 me-md-2 tombol-transisi">Explore now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- sleman -->
    <section id="sleman">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253052.3045222282!2d110.21646063416343!3d-7.6893462907219865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ee1c5671249%3A0x3027a76e352bc20!2sSleman%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1701731184543!5m2!1sen!2sid" width="450" height="450" style="border:0; border-radius:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Kabupaten Sleman</h1>
            <p class="lead">
              Sleman (Jawa: ꦱ꧀ꦭꦺꦩꦤ꧀) adalah sebuah wilayah kabupaten yang terletak di Daerah Istimewa Yogyakarta. Ibu kotanya adalah kapanewon Sleman. Sleman dikenal sebagai asal buah salak pondoh.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="sleman.php" class="btn btn-primary btn-lg px-4 me-md-2 tombol-transisi">Explore now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- gunung kidul -->
    <section id="gunungkidul">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252867.79581504792!2d110.41712000447941!3d-7.9928123800935476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb3a693c3d897%3A0x3027a76e352bc10!2sGunung%20Kidul%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1701731563665!5m2!1sen!2sid" width="450" height="450" style="border:0; border-radius:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Kabupaten Gunung Kidul</h1>
            <p class="lead">
              Kabupaten Gunungkidul (Jawa: ꦒꦸꦤꦸꦁꦏꦶꦢꦸꦭ꧀) adalah sebuah wilayah kabupaten yang terletak di Daerah Istimewa Yogyakarta, Indonesia. Ibu kota kabupaten ini terletak di Kapanewon Wonosari.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="gunung_kidul.php" class="btn btn-primary btn-lg px-4 me-md-2 tombol-transisi">Explore now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- wilayah selesai -->
   
    <!-- footer mulai -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fafafa" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,229.3C480,256,600,288,720,288C840,288,960,256,1080,250.7C1200,245,1320,267,1380,277.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>

    <footer class="py-2 background-footer">
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a class="navbar-brand fw-bold" href="#home">
              VANCANA
            </a>
            <p class="text-body-secondary">© 2023</p>
          </div>

          <div class="col mb-3">

          </div>

          <div class="col mb-3">
            <h5>Destinasi</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kota</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Bantul</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kulon Progo</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sleman</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Gunung Kidul</a></li>
            </ul>
          </div>

          <div class="col mb-3">
            <h5>Kuliner</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kota</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Bantul</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kulon Progo</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sleman</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Gunung Kidul</a></li>
            </ul>
          </div>

          <div class="col mb-3">
            <h5>Hotel</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kota</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Bantul</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kulon Progo</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sleman</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Gunung Kidul</a></li>
            </ul>
          </div>

        </footer>
      </div>
    </footer>
    
    <!-- footer selesai -->

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
          var scrollPosition = window.scrollY;

          // Adjust the value (e.g., 100) based on when you want the background to appear
          if (scrollPosition > 100) {
            navbar.style.backgroundColor = 'rgba(255,255,255,.3)'; // Change this to your desired background color
          } else {
            navbar.style.backgroundColor = 'transparent';
          }
        });
      });
    </script>

  <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollPos = $(document).scrollTop();

            $('section').each(function() {
                var offsetTop = $(this).offset().top-100;
                var offsetBottom = offsetTop + $(this).outerHeight()+100;

                if (scrollPos >= offsetTop && scrollPos <= offsetBottom) {
                    var targetId = $(this).attr('id');
                    $('#navbar a').removeClass('active');
                    $('#navbar a[href="#' + targetId + '"]').addClass('active');
                }
            });
        });
    });

  </script>
  
    

  </body>
</html>

<? php mysqli_close($conn); ?>