<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Jogja - Kulon Progo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_wilayah.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script defer src="app.js"></script>
</head>
<body>
    <!-- navbar mulai -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">
          VANCANA
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

    <!-- jumbotron mulai -->
    <section id="home" class="jumbotron">
      <div class="d-flex container-fluid" lc-helper="background" style="height:75vh;background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)), url(./img/kedung_pedut.jpg);background-position: center;background-repeat: no-repeat;background-size:cover; border-radius: 0px 0px 25px 25px;"></div>

      
      <div class="container p-5 bg-hero" onclick="location.href='#destinasi';">
        <div class="row">
          <div class="col-md-6 text-center align-self-center">
            <div class="lc-block">
              <div editable="rich">
                <p class="display-5 text-secondary">ꦏꦸꦭꦺꦴꦤ꧀ꦥꦿꦒ</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center align-self-center">
            <div class="lc-block">
              <div editable="rich">
                <p class="display-5 fw-bold">Kabupaten Kulon Progo</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center align-self-center">
            <div class="lc-block mt-5">
              <div editable="rich">
                <p class="lead">Kulon Progo adalah kabupaten di provinsi Daerah Istimewa Yogyakarta, Indonesia. Kabupaten ini menawarkan keindahan alam yang memukau, melibatkan perpaduan pegunungan, sungai, dan sawah yang hijau. Destinasi wisata seperti Kebun Buah Mangunan dan Taman Sari Royal Heritage Spa menggambarkan kekayaan alam dan keindahan tradisional Kulon Progo. Selain itu, keberagaman budaya dan kesederhanaan masyarakatnya menambah pesona khas kabupaten ini.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
    
    <!-- jumbotron selesai -->

    <!-- rekomendasi destinasi mulai -->
    <section id="destinasi" class="destinasi ">
      <div class="container ">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Rekomendasi Destinasi Wisata di Kabupaten Kulon Progo</h2>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Ini pilihan destinasi wisata yang kami rekomendasikan!</p>
          </div>
        </div>

        <div class="row justify-content-center">

          <div id="cardCarouselDestinasi" class="carousel slide" data-ride="carousel">
            
            <!-- Custom Navigation Buttons -->
            <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-center" >
              <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselDestinasi" data-bs-slide="prev">
                Prev
              </button>
              <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselDestinasi" data-bs-slide="next">
                Next
              </button>
            </div>
            

            <div class="carousel-inner hidden">

              <?php
                $result = mysqli_query($conn, "SELECT * FROM `destinasi`");
                $numCards = mysqli_num_rows($result);

                // Calculate the number of slides needed
                $numSlides = ceil($numCards / 3);
                for ($i = 0; $i < $numSlides; $i++) {
              ?>
                
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                  <div class="row justify-content-center">
                    <?php
                    for ($j = 0; $j < 3 && $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $j++) {
                      $collapseId = "collapseWidthExample_" . ($i * 3 + $j + 1); // Unique identifier for each card
                    ?>
                      <div class="col-md-3 mb-3">
                        <div class="card mb-3 shadow-sm">
                          <img src="./img/<?php echo $row['gambar_destinasi']; ?>" class="card-img-top" alt="..." style="height: 200px; "/>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama_destinasi']; ?></h5>
                            <p class="card-text mb-0">
                              <?php
                              // Display a limited amount of text
                              $limitedText = substr($row['isi_destinasi'], 0, 200);
                              echo $limitedText;

                              // Add "..." if the text is truncated
                              if (strlen($row['isi_destinasi']) > 200) {
                                echo '...';
                              }
                              ?>
                              
                              <div class="collapse mb-3" id="<?php echo $collapseId; ?>">
                                <?php echo substr($row['isi_destinasi'], 200); ?>
                              </div>
                              <div class="d-grid gap-2">
                                <button class="btn btn-link btn-sm mt-3 mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">Read more</button>
                              </div>
                            </p>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              <?php
              }
              ?>

            </div>

          </div>

        </div>


      </div>
    </section>
    <!-- rekomenadi destinasi selesai -->

    <!-- rekomendasi kuliner mulai -->
    <section id="kuliner" class="kuliner">

      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Rekomendasi Kulineran di Kabupaten Kulon Progo</h2>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Ini pilihan kuliner yang kami rekomendasikan!</p>
          </div>
        </div>

        <div class="row justify-content-center">

          <div id="cardCarouselKuliner" class="carousel slide" data-ride="carousel">
            
            <!-- Custom Navigation Buttons -->
            <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-center" >
              <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselKuliner" data-bs-slide="prev">
                Prev
              </button>
              <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselKuliner" data-bs-slide="next">
                Next
              </button>
            </div>
            

            <div class="carousel-inner hidden">

              <?php
                $result = mysqli_query($conn, "SELECT * FROM `kuliner`");
                $numCards = mysqli_num_rows($result);

                // Calculate the number of slides needed
                $numSlides = ceil($numCards / 3);
                for ($i = 0; $i < $numSlides; $i++) {
              ?>
                
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                  <div class="row justify-content-center">
                    <?php
                    for ($j = 0; $j < 3 && $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $j++) {
                    ?>
                      <div class="col-md-3 mb-3">
                        <div class="card mb-3 shadow-sm">
                          <img src="./img/<?php echo $row['gambar_kuliner']; ?>" class="card-img-top" alt="..." style="height: 200px;"/>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama_kuliner']; ?></h5>
                            <p class="card-text">
                              <?php echo $row['isi_kuliner'];?>
                            </p>
                            <ul class="list-group">
                              <li class="list-group-item">Harga mulai dari <span class="fw-bold"><?php echo $row['harga_kuliner'];?></span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              <?php
              }
              ?>

            </div>

          </div>
        </div>

      </div>

    </section>

    <!-- rekomendasi kuliner selesai -->

    <!-- rekomendasi hotel mulai -->
    <section class="hotel" id="hotel">
      <div class="row text-center mb-3 ">
        <div class="col">
          <h2>Rekomendasi Hotel di Kabupaten Kulon Progo</h2>
        </div>
      </div>
      <div class="row text-center mb-3">
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Ini pilihan hotel dari bintang 5 sampai bintang 3 yang kami rekomendasikan!</p>
        </div>
      </div>

      <section id="bintang5">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h3>Rekomendasi Hotel Bintang 5</h3>
            </div>
          </div>
          <div class="row justify-content-center">
              
            <div id="cardCarouselHotel5" class="carousel slide" data-ride="carousel">
              
              <!-- Custom Navigation Buttons -->
              <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-center" >
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel5" data-bs-slide="prev">
                  Prev
                </button>
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel5" data-bs-slide="next">
                  Next
                </button>
              </div>
              

              <div class="carousel-inner hidden">

                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `hotel`  WHERE bintang_hotel = 'Bintang 5'");
                  $numCards = mysqli_num_rows($result);

                  // Calculate the number of slides needed
                  $numSlides = ceil($numCards / 3);
                  for ($i = 0; $i < $numSlides; $i++) {
                ?>
                  
                  <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                      <?php
                      for ($j = 0; $j < 3 && $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $j++) {
                      ?>
                        <div class="col-md-3 mb-3">
                          <div class="card">
                            <img src="./img/<?php echo $row['gambar_hotel'];?>" class="card-img-top" alt="..." style="height: 200px;"/>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $row['nama_hotel'];?></h5>
                              <p class="card-text"><?php echo $row['isi_hotel'];?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold"><?php echo $row['bintang_hotel'];?></li>
                              <li class="list-group-item">Harga mulai dari <span class="fw-bold"><?php echo $row['harga_hotel'];?></span></li>
                            </ul>
                            <div class="card-body">
                              <a href="<?php echo $row['link_hotel'];?>" class="card-link">Pesan hotel ini.</a>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                <?php
                }
                ?>

              </div>

            </div>



          
          </div>
        </div>
      </section>

      <section id="bintang4">
        <div class="container ">
          <div class="row text-center mb-3 mt-5">
            <div class="col">
              <h3>Rekomendasi Hotel Bintang 4</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div id="cardCarouselHotel4" class="carousel slide" data-ride="carousel">
              
              <!-- Custom Navigation Buttons -->
              <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-center" >
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel4" data-bs-slide="prev">
                  Prev
                </button>
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel4" data-bs-slide="next">
                  Next
                </button>
              </div>
              

              <div class="carousel-inner hidden">

                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `hotel`  WHERE bintang_hotel = 'Bintang 4'");
                  $numCards = mysqli_num_rows($result);

                  // Calculate the number of slides needed
                  $numSlides = ceil($numCards / 3);
                  for ($i = 0; $i < $numSlides; $i++) {
                ?>
                  
                  <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                      <?php
                      for ($j = 0; $j < 3 && $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $j++) {
                      ?>
                        <div class="col-md-3 mb-3">
                          <div class="card">
                            <img src="./img/<?php echo $row['gambar_hotel'];?>" class="card-img-top" alt="..." style="height: 200px;"/>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $row['nama_hotel'];?></h5>
                              <p class="card-text"><?php echo $row['isi_hotel'];?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold"><?php echo $row['bintang_hotel'];?></li>
                              <li class="list-group-item">Harga mulai dari <span class="fw-bold"><?php echo $row['harga_hotel'];?></span></li>
                            </ul>
                            <div class="card-body">
                              <a href="<?php echo $row['link_hotel'];?>" class="card-link">Pesan hotel ini.</a>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                <?php
                }
                ?>

              </div>

            </div>
          </div>
        </div>
      </section>

      <section id="bintang3">
        <div class="container ">
          <div class="row text-center mb-3 mt-5">
            <div class="col">
              <h3>Rekomendasi Hotel Bintang 3</h3>
            </div>
          </div>
          <div class="row justify-content-center">
          <div id="cardCarouselHotel3" class="carousel slide" data-ride="carousel">
              
              <!-- Custom Navigation Buttons -->
              <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-center" >
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel3" data-bs-slide="prev">
                  Prev
                </button>
                <button class="btn btn-primary" type="button" data-bs-target="#cardCarouselHotel3" data-bs-slide="next">
                  Next
                </button>
              </div>
              

              <div class="carousel-inner hidden">

                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `hotel`  WHERE bintang_hotel = 'Bintang 3'");
                  $numCards = mysqli_num_rows($result);

                  // Calculate the number of slides needed
                  $numSlides = ceil($numCards / 3);
                  for ($i = 0; $i < $numSlides; $i++) {
                ?>
                  
                  <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                      <?php
                      for ($j = 0; $j < 3 && $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $j++) {
                      ?>
                        <div class="col-md-3 mb-3">
                          <div class="card">
                            <img src="./img/<?php echo $row['gambar_hotel'];?>" class="card-img-top" alt="..." style="height: 200px;"/>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $row['nama_hotel'];?></h5>
                              <p class="card-text"><?php echo $row['isi_hotel'];?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold"><?php echo $row['bintang_hotel'];?></li>
                              <li class="list-group-item">Harga mulai dari <span class="fw-bold"><?php echo $row['harga_hotel'];?></span></li>
                            </ul>
                            <div class="card-body">
                              <a href="<?php echo $row['link_hotel'];?>" class="card-link">Pesan hotel ini.</a>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                <?php
                }
                ?>

              </div>

            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- rekomendasi hotel selesai -->

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
            navbar.style.backgroundColor = 'rgba(255,255,255,1)'; // Change this to your desired background color
          } else {
            navbar.style.backgroundColor = 'rgba(255,255,255,.3)';
          }
        });
      });
    </script>

</body>
</html>