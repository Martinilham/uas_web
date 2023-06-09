<?php 
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


    <title>Halaman Login</title>
  </head>
  <!-- Form Login -->
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4 my-5">
                <h2 class="text-center mt-5">LOGIN</h2>
                <h5 class="text-center pt-2">Nganjuk Street Food</h5>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label ps-2">Username:</label>
                        <input type="text" class="form-control username" id="formGroupExampleInput" placeholder="Username" name="username">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label ps-2">Password:</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password">
                      </div>
                      <p>Belum Punya Akun ? <a href="register.php">Buat akun</a></p>
                      <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="submit">Masuk</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
  <!-- Akhir Form Login -->

  <!-- Eksekusi Form Login -->
      <?php 
        if(isset($_POST['submit'])) {
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: pesanan.php');
                }elseif ($status == 'user') {
                  header('location: user.php'); 
                }
            }else{
                header("location: index.php");
            }
        }
       ?>
    </div>
  <!-- Akhir Eksekusi Form Login -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>