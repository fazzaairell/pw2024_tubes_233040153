<?php 
require 'functions.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_result = in($_POST);
    if ($login_result['error']) {
        echo $login_result['pesan'];
    }
}

if (isset($_SESSION['in'])) {
  header("Location: index.php");
  exit;
}

// ketika tombol  login di tekan
if (isset($_POST['in'])) {
  $in = in($_POST);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
    <div class="wrapper">
      <?php if(isset($in['error'])) : ?>
        <p style="color: red; font-style:italic;"><?= $in['pesan']; ?></p>
      <?php endif; ?>
      <form action="" method="POST">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="username" name="username" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> Remember me</label>
          <a href="login_admin.php">Login admin</a>
        </div>

        <button type="submit" class="btn" name="in" >Login</button>

        <div class="register-link">
          <p>Don't have an account?<a href="register.php">Register</a></p>
          </div>
      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>