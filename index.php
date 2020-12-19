<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moonday Mood</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>

  <!-- header -->
  <?php include 'user/templates/header.php'; ?>

  <!-- ***** Main Banner Area Start ***** -->
  <div id="top">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-4">
          <div class="left-content">
            <div class="inner-content">
              <h4>Moonday Mood</h4>
              <h6>THE BEST STATIONERY</h6>
              <div class="main-white-button scroll-to-section">
                <a href="#produk">Belanja Sekarang Juga!</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="user/assets/images/slide-04.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="user/assets/images/slide-05.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="user/assets/images/slide-06.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- konten   -->
    <section class="content" id="produk">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-heading">
              <br><br><br><br><br><br><br>
              <h6>Our Product</h6>
              <h2>Moonday Mood</h2> <br><br>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <?php
              $ambil = $koneksi->query("SELECT * FROM produk");
              while ($perproduk = $ambil->fetch_assoc()) :
              ?>
                <div class="col-md-3">
                  <div class="thumbnail">
                    <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
                    <div class="caption">
                      <h4><?= $perproduk['nama_produk']; ?></h4> <br>
                      <h6>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h6> <br>
                      <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
                      <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-warning">detail</a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <br><br><br>

</body>

</html>

  <!-- footer -->
  <?php include 'user/templates/footer.php'; ?>
