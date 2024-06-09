
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemograman Web | Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Daftar User</h1>
        <a href="tambah.php" class="btn btn-primary"></a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">JURUSAN</th>
      <th scope="col">AKSI</th>
      </tr>
      </thead>
      <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="p-2">
        <a href="ubah.php"class="badge text-bg-warning text-decoration-none">edit</a>
        <a href="hapus.php" onclick="return confirm('apakah anda yakin!');" class="badge text-bg-danger text-decoration-none">delete</a>
    </td>
    </tr>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>