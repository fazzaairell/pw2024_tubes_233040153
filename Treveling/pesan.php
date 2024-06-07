<?php 
session_start();

if(!isset($_SESSION['in'])) {
  header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .container {
      width: 40%;
      /* height: 500px; */
      background-color: rgba(0, 0, 0, 0.4);
      border-radius: 10px;
      text-align: center;
      align-items: center;
      backdrop-filter: blur(3px);
      color: #ffff;
      margin-top: 3rem;
    }
    body {
      background-image: url(../Treveling/img/karsten-winegeart-fd1cQ3mmBTE-unsplash.jpg);
      background-size: cover;
      background-position: center;
    }
    .judul {
      /* background-color: #258ad8; */
      width: 250px;
      border-radius: 10px;
      justify-content: center;
      margin-top: 3rem;
      text-align: center;
      color: #ffff;
      text-shadow:
      -1px -1px 0 black,
      1px -1px 0 black, 
      -1px 1px 0 black, 
      1px 1px 0 black;
    }
  </style>
  <body>
    <div class="judul mx-auto">
      <h1>Pesan Disini</h1>    
    </div>
 <div class="container">
  <form class="needs-validation" novalidate>
  <div class="col-md-8 position-relative mx-auto">
    <label for="validationTooltip01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationTooltip01" value="" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-8 position-relative pt-3 mx-auto">
    <label for="validationTooltip02" class="form-label">Destination</label>
    <input type="text" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-8 position-relative pt-3 mx-auto">
    <label for="validationTooltipUsername" class="form-label">No.Hp</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">+62</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="date col-md-8 position-relative mx-auto pt-3">
    <label for="validationTooltip02" class="form-label">Tentukan Tanggal</label>
    <input type="date" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  <div class="mt-3 p-3">
    <button class="btn btn-danger" type="submit"><a href="index.php" class="color-light">back</a></button>
    <button class="btn btn-primary " type="submit">pesan</button>
  </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>