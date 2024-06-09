<?php 
require 'functions.php';

session_start();

if(isset($_POST['masuk'])) {
  $masuk = masuk($_POST);
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <style>

   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url(../Treveling/img/karsten-winegeart-fd1cQ3mmBTE-unsplash.jpg);
  background-size: cover;
  background-position: center;
}
.wrapper {
  width: 420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(3px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  color: #ffff;
  border-radius: 10px;
  padding: 30px 40px;
}
.wrapper h1 {
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0;
}
.input-box input {
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder {
  color: #ffff;
}
.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input {
  accent-color: #fff;
  margin-right: 3px;
}
.remember-forgot a {
  color: #fff;
  text-decoration: none;
}
.remember-forgot a:hover {
  text-decoration: underline;
}
.wrapper .btn {
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}
.wrapper .register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}
.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;

}
.register-link p a:hover {
  text-decoration: underline;
}
  </style>
  <body>
    <div class="wrapper">
      <form action="" method="POST">
        <h1>Login Admin</h1>
        <div class="input-box">
          <input type="text" placeholder="username" name="user" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="pass" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> Remember me</label>
          <a href="login.php">Login User</a>
        </div>

        <button type="submit" class="btn" name="masuk" >Login</button>

        <div class="register-link">
          <p>Don't have an account?<a href="register.php">Register</a></p>
          </div>
      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>