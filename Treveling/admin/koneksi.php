<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "pw2024_tubes_233040153"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

 
  function cari($keyword) {
    $conn = koneksi();



    $query = "SELECT * FROM hotel 
              WHERE nama_hotel LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>
