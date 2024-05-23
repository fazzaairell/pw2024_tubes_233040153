<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container mx-5">
    <a class="navbar-brand" href="#">Traveling<span>Yuk</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Hotels</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Destination</a>
        </li>
      </ul>
      <div class="btn my-2">
      <a href="login.php" id=""><i data-feather="user"></i></a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>

      </div>
    </div>
  </div>
</nav>
<!-- hero section -->
<section class="hero" id="home">
        <main class="content">
            <h1>Mau Kemana <span>Hari Ini</span></h1>
            <a href="#" class="cta">Chek in</a>
        </main>
 <!-- fitur hotel -->
</section>
<section id="fitur" class="mt-5 overflow-hidden">
  <div class="container">
    <div class="row mb-4">
      <div class="col-9">
        <h1>Destination</h1>
      </div>
      <div class="col-3">
        <button class="button-fitur">See all..
          <a href=""></a>
        </button>
      </div>
    </div>

    <div class="container position-relative">
      <div class="row">
        <div class="col-12 d-flex justify-content-start">
          <div class="card-fitur me-4 position-relative">
            <img src="img/sebastian-pena-lambarri-U_i6h9Y50wQ-unsplash.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  Kamar Tidur
                </h5>
                <span>Hotel Bali</span>
                <h6>IDR.500JT/Permalam</h6>
                <button>Lihat Kamar</button>
              </div>
            </div>
          </div>
          <div class="card-fitur me-4 position-relative">
            <img src="img/sebastian-pena-lambarri-U_i6h9Y50wQ-unsplash.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  Kamar Tidur
                </h5>
                <span>Hotel Bali</span>
                <h6>IDR.500JT/Permalam</h6>
                <button>Lihat Kamar</button>
              </div>
            </div>
          </div>
          <div class="card-fitur me-4 position-relative">
            <img src="img/sebastian-pena-lambarri-U_i6h9Y50wQ-unsplash.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  Kamar Tidur
                </h5>
                <span>Hotel Bali</span>
                <h6>IDR.500JT/Permalam</h6>
                <button>Lihat Kamar</button>
              </div>
            </div>
          </div>
          <div class="card-fitur me-4 position-relative">
            <img src="img/sebastian-pena-lambarri-U_i6h9Y50wQ-unsplash.jpg" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  Kamar Tidur
                </h5>
                <span>Hotel Bali</span>
                <h6>IDR.500JT/Permalam</h6>
                <button>Lihat Kamar</button>
              </div>
            </div>
          </div>
 
        </div>
      </div>
      <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y">
      <i data-feather="chevron-left"></i>
    </button>
    <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y">
      <i data-feather="chevron-right"></i>
    </button>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- icons -->
        <!-- icons -->
        <script>
      feather.replace();
    </script>
  </body>
</html>