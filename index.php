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
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.carousel.default.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script defer src="app.js"></script>
  </head>
  <body>
    <!-- navbar mulai -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light " id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#home">
          VANCANA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#destinasi">Destinasi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kuliner">Kuliner</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Hotel </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#bintang5">Bintang 5</a></li>
                <li><a class="dropdown-item" href="#bintang4">Bintang 4</a></li>
                <li><a class="dropdown-item" href="#bintang3">Bintang 3</a></li>
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
      <div class="d-flex container-fluid" lc-helper="background" style="height:75vh;background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url(./img/prambanan.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; border-radius: 0px 0px 25px 25px;"></div>

      
      <div class="container p-5 bg-hero" onclick="location.href='#destinasi';">
        <div class="row">
          <div class="col-md-4 text-center align-self-center">
            <div class="lc-block border-end border-2">
              <div editable="rich">
                <p class="display-5 text-secondary">VANCANA</p>
              </div>
            </div>
          </div>
          <div class="col-md-8 text-center align-self-center">
            <div class="lc-block">
              <div editable="rich">
                <p class="display-5 fw-bold">Explore Jogja!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 offset-md-1">
            <div class="lc-block mt-5">
              <div editable="rich">
                <p class="lead">Selamat datang di Jogja, pusat keajaiban yang menunggu untuk dijelajahi!</p>
                <p class="lead">Temukan perjalanan terbaik untuk pengalaman yang tak terlupakan.</p>
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
            <h2>Rekomendasi Destinasi Wisata di Jogja</h2>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Jogja punya banyak destinasi wisata <i>lho</i>... Ini pilihan destinasi wisata yang kami rekomendasikan!</p>
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
            <h2>Rekomendasi Kulineran di Jogja</h2>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Jogja terkenal dengan beragam makanan khasnya. Ini pilihan kuliner yang kami rekomendasikan!</p>
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
          <h2>Rekomendasi Hotel di Jogja</h2>
        </div>
      </div>
      <div class="row text-center mb-3">
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Tidak asik kalau liburan ke Jogja cuma satu hari. Ini pilihan hotel dari bintang 5 sampai bintang 3 yang kami rekomendasikan!</p>
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
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#home" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#destinasi" class="nav-link px-2 text-muted">Destinasi</a></li>
        <li class="nav-item"><a href="#kuliner" class="nav-link px-2 text-muted">Kuliner</a></li>
        <li class="nav-item"><a href="#hotel" class="nav-link px-2 text-muted">Hotel</a></li>
      </ul>
      <p class="text-center text-muted">VANCANA © 2023</p>
    </footer>
    
    <!-- footer selesai -->

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      var navbar = document.getElementById('navbar');

      window.addEventListener('scroll', function() {
        var scrollPosition = window.scrollY;

        // Adjust the value (e.g., 100) based on when you want the background to appear
        if (scrollPosition > 100) {
          navbar.style.backgroundColor = '#fff'; // Change this to your desired background color
        } else {
          navbar.style.backgroundColor = 'transparent';
        }
      });
    });
  </script>
    

  </body>
</html>

<? php mysqli_close($conn); ?>