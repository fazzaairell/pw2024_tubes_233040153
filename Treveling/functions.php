<?php
$host = "localhost"; 
$user = "root";
$pass = "";
$nama_db = "pw2024_tubes_233040153"; 
$koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040153');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function in($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username nya
    $stmt = $conn->prepare("SELECT * FROM akun WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $akun = $result->fetch_assoc();
        // cek passwordnya
        if (password_verify($password, $akun['password'])) { // asumsikan password disimpan sebagai hash
            // set session
            //berikan kondisi jika dia admin maka dia true
            $_SESSION['in'] = true;
            header("Location: index.php");
            exit;
        }
    }

    return [
        'error' => true,
        'pesan' => 'username / password salah!!'
    ];
}

// Contoh penggunaan fungsi in




function registrasi($data)
//jika username dan password kosong
{
    $conn = koneksi();
    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if (empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'register.php';
              </script>";
            
        return false;
    }

    // jika username sudah ada 
    if (query("SELECT * FROM akun WHERE username = 'username'")) {
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'register.php';
              </script>";
        return false;
    }
    //jika konfirmasi password tidak sesuai
    if ( $password1 !== $password2 ) {
       echo  "<script>
                alert('konfirmasi password tidak sesuai');
                document.location.href = 'register.php';
              </script>";

         return false;
    }
    //jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('password terlalu pendek!');
                 document.location.href = 'register.php';
            </script>";
            return false;
    }
    //jika username & password anda sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // inssert ke tabel akun
    $query = "INSERT INTO akun
                VALUES
            (null, '$username', '$password_baru')";

            mysqli_query($conn, $query) or die(mysqli_error($conn));
            return mysqli_affected_rows($conn);
}





?>