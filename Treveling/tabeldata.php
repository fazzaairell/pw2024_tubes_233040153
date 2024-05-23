<?=
$conn = mysqli_connect('localhost','root','','pw2024_tubes_233040153');
$result = mysqli_query($conn, "SELECT * FROM user");

$rows = [];
while($row = mysqli_fetch_assoc ($result)) {
  $rows[] = $row;
}

$user = $rows;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
      <th scope="col">SANDI</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <? foreach ( $user as $us) : ?>
    <tr>
      <th scope="row">1</th>
      <td> <?= $us ['nama']; ?> </td>
      <td> <?= $us ['email']; ?> </td>
      <td> <?= $us ['ussername']; ?> </td>
      <td> <?= $us ['password']; ?> </td>
      <td>
        <a href="#"class="badge text-bg-warning text-decoration-none">edit</a>
        <a href="#"class="badge text-bg-danger text-decoration-none">delete</a>
      </td>
    </tr>
   <? endforeach; ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>