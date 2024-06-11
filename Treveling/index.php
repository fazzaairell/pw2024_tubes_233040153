<?php
  include('../Treveling/admin/koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traveling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    


  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent sticky-top position-absolute w-100">
      <div class="container">
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
            <a class="nav-link" href="#fitur">Hotels</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#Layanan">Layanan</a>
          </li>
        </ul>
        <form class=" form d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
          <button class="btn btn-outline-primary" type="submit" name="cari">Search</button>
        </form>
        <div class="btn my-2">
            <a href="login.php" id=""><i data-feather="user"></i></a>
        </div>
        <div class="btn-logout">
            <a href="logout.php"><i data-feather="log-out"></i></a>
        </div>
    </div>
  </div>
</nav>
<!-- hero section -->
<section class="hero" id="home">
        <main class="content"data-aos="fade-right">>
            <h1>Mau Kemana <br>
            <span>Hari Ini?</span></h1>
            <a href="pesan.php" class="cta">Chek in</a>
        </main>
</section>
<!-- fitur hotel -->
<section id="fitur" class="mt-5 overflow-hidden">
  <div class="container">
    <div class="row mb-4">
      <div class="col-9">
        <h1 data-aos="zoom-out-up">Destination</h1>
      </div>
      <div class="col-3" data-aos="zoom-out-up">
        <button class="button-fitur">See all..
          <a href=""></a>
        </button>
      </div>
    </div>
    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM hotel ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
    <div class="container position-relative" data-aos="zoom-out-up">
      <div class="row">
        <div class="col-12 d-flex justify-content-start">
          <div class="card-fitur me-4 position-relative">
            <img src="img/<?php echo $row['gambar_hotel']; ?>" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                <?php echo $row['nama_hotel']; ?>
                </h5>
                <h6><?php echo substr($row['harga_hotel'], 0, 20); ?></h6>
                <button type="submit"><a href="pesan.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-light">Pesan</a></button>
              </div>
            </div>
          </div>
          <?php 
            $no++;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
        <div class="services mt-4" id="Layanan" >
            <div class="container" data-aos="fade-up">
                <h1 class="sub-tittle">LAYANAN</h1>
                <p>Apa saja sih layanan yg bisa kalian nikmati</p>
             <div class="services-list">
                <div data-aos="fade-up"  class="kotak">
                <i data-feather="fast-forward"></i>
                    <h2>Cepat No Ribet</h2>
                    <p>Memanfaatkan layanan pesan antar dari toko cat sampai ke rumah</p>
                 </div>
            <div data-aos="fade-up" class="kotak">
            <i data-feather="dollar-sign"></i>
                <h2>Jaminan Harga</h2>
                <p>Toko lain lebih murah? <br>selisih harga lebih dengan toko lain kami kembalikan</p>
            </div>
            <div data-aos="fade-up">
            <i data-feather="credit-card"></i>
                <h2>Cashback</h2>
                <p><br>kami menerima penukaran atau pengembalian uang jika sudah di chekin</p>
           </div>
            <div data-aos="fade-up">
                <i data-feather="clock"></i>
                <h2>Siap Melayani 24 jam</h2>
                <p>Custumor service kami siap melayani anda dengan ramah</p>
           </div>
         </div> 
       </div>
       </div>  
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- icons -->
        <script>
      feather.replace();
    </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    <script>
  AOS.init();
</script>
<script src="script.js"></script>
  </body>
</html>