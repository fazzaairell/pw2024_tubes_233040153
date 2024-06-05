<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <style type="text/css">
      :root {
       --primary: #258ad8;
      --bg: #ffffff;
      }
      * {
        font-family: 'poppins', sans-serif;
      }
      h1 {
        text-transform: uppercase;
        color: var(--primary);
      }
    button {
          background-color: var(--primary);
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
          transition: all .45s ease;
          border-radius: 3px;

    }
    button:hover {
      transform: scale(1.1);
      cursor: pointer;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: var(--primary);
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama hotel</label>
          <input type="text" name="nama_hotel" autofocus="" required="" />
        </div>
        <div>
          <label>harga_hotel</label>
         <input type="text" name="harga_hotel" />
        </div>
        <div>
          <label>Gambar hotel</label>
         <input type="file" name="gambar_hotel" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>