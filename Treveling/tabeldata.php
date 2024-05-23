<?php
require 'function.php';

$user= query("SELECT * FROM user");
var_dump($user);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <h1>Daftar User</h1>
        <a href="#" class="btn btn-primary">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA</th>
              <th scope="col">EMAIL</th>
              <th scope="col">USERNAME</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <?= $i = 1; ?>
          <?php foreach ($user as $us) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?echo=$us['nama']; ?></td>
              <td><?echo=$us['email']; ?></td>
              <td><?echo=$us['ussername']; ?></td> 
              <td>
                <a href="#" class="badge text-bg-warning text-decoration-none">edit</a>
                <a href="#" class="badge text-bg-danger text-decoration-none">delete</a>
              </td>
            </tr>
            <?= $i++; ?>
          <?php endforeach; ?>
          </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>