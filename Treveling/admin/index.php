<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  require 'koneksi.php';
  if (isset($_POST['cari'])) {
    $query = cari($_POST['keyword']);
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tabel Data</title>
    <style type="text/css">
      :root {
       --primary: #258ad8;
      --bg: #ffffff;
      }
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: var(--primary);
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: var(--primary);
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
        
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        /* text-shadow: 1px 1px 1px #fff; */
        
    }
    a {
          background-color: var(--primary);
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border-radius: 5px;
    }
    .form {
      display: flex;
      justify-content: center;
      margin-top: 3rem;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Produk</h1><center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a><center>
    <form class="form" action="" method="POST">
          <input class="keyword" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off" autofocus>
          <button class="caru" type="submit" name="tombol-cari">Search</button>
    </form>
    <br/>
    <div class="container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>nama hotel</th>
          <th>harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
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
       <tr> 
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_hotel']; ?></td>
          <td><?php echo substr($row['harga_hotel'], 0, 20); ?>...</td>
          <td style="text-align: center;"><img src="image/<?php echo $row['gambar_hotel']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
  </table>
</div>
<script src="script.js"></script>
  </body>
</html>