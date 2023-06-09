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
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="user1.css">


    <title>Makanan Khas Nganjuk</title>
  </head>
  <body>


  <!-- Menu -->    
 <div class="container-fluid bg ">
 <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#" style="font-weight: bold;">Nganjuk Food</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="m-auto navbar-nav mb-2 mb-lg-0 text-dark ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="menu_pembeli.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesanan_pembeli.php">Pesanan Saya</a>
                  </li>
                </ul>
                <a class="me-4 text-dark" href="logout.php">Logout</a>
              </div>
            </div>
          </nav>

        <div class="container-sm w-50 ms-2 h-100 mt-5 set-res" style="padding-top: 10%;">
          <h1 class="display-5 "><span class="font-weight-bold">Makanan Khas Nganjuk</span></h1>

          <p class="lead font-weight-bold ">Yuk esplore beberapa Makanan Khas Nganjuk dan lokasinya di Mana aja ada kok semuanya disini yuk cuss klik tombol di bawah ya</p>
          <a href="menu_pembeli.php"><button class="btn btn-dark border-0 px-4" type="submit" style="background-color: #84B750; border-radius:30px;" >Kunjungi!</button></a>
        </div>

      </div>
  <!-- Akhir Jumbotron -->

<div class="container mt-5">
  <h2 class="text-center">Special Menu</h2>
  <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4 text-center" >
    <div class="col-md-3">
    <div class="card h-100 border-0" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 30px; ">
      <img src="images/bakso.jpeg" class="card-img-top  m-auto mt-3" style="border: 10px solid #86B853; border-radius: 50%; width:200px; height:200px;"  alt="...">
      <div class="card-body">
        <h4 class="card-title">Bakso</h4>
        <p class="card-text">Rekom bakso terenak sekarang.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 text-center">
    <div class="card h-100 border-0" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 30px; ">
      <img src="images/esjeruk.jpg" class="card-img-top  m-auto mt-3" style="border: 10px solid #86B853; border-radius: 50%; width:200px; height:200px;"  alt="...">
      <div class="card-body">
        <h4 class="card-title">Es Jeruk</h4>
        <p class="card-text">Biasanya tersedia di warung kopi tapi di sini tempat rekomnya tetep A yani dengan viewnya.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card h-100 border-0" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 30px; ">
      <img src="images/nasgor.jpg" class="card-img-top  m-auto mt-3" style="border: 10px solid #86B853; border-radius: 50%; width:200px; height:200px;"  alt="...">
      <div class="card-body">
        <h4 class="card-title">Nasi Goreng</h4>
        <p class="card-text">Nasi Goreng Khas nganjuk biasa berada di pinggir jalan A yani.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card h-100 border-0" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; border-radius: 30px; ">
      <img src="images/mieayam.jpg" class="card-img-top  m-auto mt-3" style="border: 10px solid #86B853; border-radius: 50%; width:200px; height:200px;"  alt="...">
      <div class="card-body">
        <h4 class="card-title">Mie Ayam</h4>
        <p class="card-text">Mi ayam paling rekom yaitu keliling daerah tanjung jam 10 malam ke atas.</p>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- Akhir Menu -->

      <div class="container-fluid bg2 mt-5" >
         <div class="row row-cols-1 row-cols-md-2 g-3 w-75 m-auto" style="padding-top: 20%;" >
          <div class="col">
            <div class="card">
              
              <div class="card-body">
                <h1 class="card-title text-center">Menu</h1>
                <p class="card-text text-center mb-4">Disini Terdapat menu-menu makanan dan minum anda bisa memilih langsung disini mudah kog tinggal klik aja!.</p>
                <a href="menu_pembeli.php"><button class=" btn btn-dark border-0 px-4 mt-3" type="submit" style="background-color: #84B750; border-radius:30px;" >Kunjungi!</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
            
              <div class="card-body m-auto">
                <h1 class="card-title text-center">Keranjang</h1>
                <p class="card-text text-center">.Disini anda bisa melihat beberapa makanan atau minuman yang anda pesan dan jika ngini mengahapus tinggal hapus kog jumlah juga sudah tertera</p>
                <a href="pesanan_pembeli.php"><button class="btn btn-dark border-0 px-4" type="submit" style="background-color: #84B750; border-radius:30px;" >Kunjungi!</button></a>
              </div>
            </div>
          </div>
              </div>
                </div>
                




  <!-- Awal Footer -->
      <hr class="footer w-100 mb-2 mt-3">
      <div class="container">
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
  <!-- Akhir Footer -->


    
  </body>
</html>
<?php } ?>