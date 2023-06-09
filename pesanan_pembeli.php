<?php  
include('koneksi.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: index.php");
      }else{
?>
<?php 
if(empty($_SESSION["pesanan"]) OR !isset($_SESSION["pesanan"]))
{
  echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
  echo "<script>location= 'menu_pembeli.php'</script>";
}
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

    <title>Pesan</title>
  </head>
  <body>
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
                    <a class="nav-link" href="menu_pembeli.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="pesanan_pembeli.php">Pesanan Saya</a>
                  </li>
                </ul>
                <a class="me-5 pe-4 text-dark" href="logout.php">Logout</a>
              </div>
            </div>
          </nav>

  <!-- Akhir Navbar -->

  <!-- Menu -->
    <div class="container">
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold mb-4">PESANAN ANDA</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subharga</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
            <?php $totalbelanja = 0; ?>
            <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

            <?php 
              include('koneksi.php');
              $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
              $pecah = $ambil -> fetch_assoc();
              $subharga = $pecah["harga"]*$jumlah;
            ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah["nama_menu"]; ?></td>
            <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
            <td><?php echo $jumlah; ?></td>
            <td>Rp. <?php echo number_format($subharga); ?></td>
            <td>
              <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" class="badge badge-danger">Hapus</a>
            </td>
          </tr>
            <?php $nomor++; ?>
            <?php $totalbelanja+=$subharga; ?>
            <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4">Total Belanja</th>
            <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
          </tr>
        </tfoot>
      </table><br>
      <form method="POST" action="">
        <a href="menu_pembeli.php border-0" class="btn btn-primary btn-sm">Lihat Menu</a>
        <button class="btn btn-success btn-sm border-0" name="konfirm">Konfirmasi Pesanan</button>
      </form>        

      <?php 
      if(isset($_POST['konfirm'])) {
          $tanggal_pemesanan=date("Y-m-d");

          // Menyimpan data ke tabel pemesanan
          $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");

          // Mendapatkan ID barusan
          $id_terbaru = $koneksi->insert_id;

          // Menyimpan data ke tabel pemesanan produk
          foreach ($_SESSION["pesanan"] as $id_menu => $jumlah)
          {
            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
              VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
          }          

          // Mengosongkan pesanan
          unset($_SESSION["pesanan"]);

          // Dialihkan ke halaman nota
          echo "<script>alert('Pemesanan Sukses!');</script>";
          echo "<script>location= 'menu_pembeli.php'</script>";
      }
      ?>
    </div>
    
  <!-- Akhir Menu -->
    

  <!-- Awal Footer -->
      <hr class="footer w-100" style="position: fixed; bottom:20px;" >
      <div class="container " style="position: fixed; bottom:0px;">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2023 -  Designed by MartnGanteng</p>
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





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
<?php } ?>