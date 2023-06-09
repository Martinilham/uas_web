<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }else{
?>

<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="user1.css">

    <title>Menu</title>
  </head>
  <body>
    <div class="container-fluid p-0 bg2" >
  <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#" style="font-weight: bold;">Nganjuk Food</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="m-auto navbar-nav mb-2 mb-lg-0 text-dark">
                  <li class="nav-item">
                    <a class="nav-link" href="user.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="menu_pembeli.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesanan_pembeli.php">Pesanan Saya</a>
                  </li>
                </ul>
                <a class="me-5 pe-4 text-dark font-weight-bold" href="logout.php">Logout</a>
              </div>
            </div>
          </nav>

  <!-- Navbar -->
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container-sm">
      <h2 class="text-center mt-5">Menu Makanan Dan Minuman</h2>
        <p class="text-center mb-4" >Menu pilihan terbaik Yang ada di Nganjuk Top tier ada di home yakk bisa di cari di sini jugaa untuk bagian minum ada di bagian bawah yaaaa!</p>
        <div class="row mt-3">
          <?php 

          include('koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>

          <div class="col-md-3 mt-4 m-auto">
            <div class="card h-100 border-0" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 30px; ">
              <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top mt-2 m-auto mt-3" style="border: 10px solid #88e43d; border-radius: 50%; width:200px; height:200px;"  alt="...">
              <div class="card-body text-center menuu">
                <h5 class="card-title font-weight-bold" style="    font-family: 'cardo';
    font-weight: bold;" ><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga" style="    font-family: 'josefins';
    font-weight: bold;" ><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-success btn-sm btn-block px-5 mt-2 border-0" style="border-radius:30px;" >BELI</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
         </div> 
      </div>
  <!-- Akhir Menu -->

  
  <!-- Awal Footer -->
      <hr class="footer mt-5 w-100">
      <div class="container p-0">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2023 -  Designed by MartinGanteng</p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
    </div>
    
  <!-- Akhir Footer -->

  </body>
</html>
<?php } ?>