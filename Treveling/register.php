<?php
require 'functions.php';
if (isset($_POST['registrasi'])) {
  if(registrasi($_POST) > 0) {
    echo "<script>
                alert('user baru berhasil ditambahkan. silahkan login!');
                document.location.href = 'login.php';
              </script>";
  } else {
      echo 'user gagal ditambahkan!';
  }
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
  <div class="wrapper">
      <form action="" method="POST">
        <h1>Registrasi</h1>
        <div class="input-box">
          <input type="text" placeholder="username" name="username" autofocus autocomplete="off" required>
          <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password1" required>
          <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="konfirmasi" name="password2" required>
          <i class='bx bxs-lock-alt'></i>
        </div>


        <button type="submit" name="registrasi" class="btn">login</button>

      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>