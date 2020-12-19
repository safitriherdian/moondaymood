<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'user/templates/header.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Detail Produk</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
  <br><br><br><br><br><br><br>
  <section class="content">
    <div class="container">
      <div class="row">

        <div class="col-md-5">
          <img src="foto_produk/<?= $detail['foto_produk']; ?>" class="img-responsive">
        </div>
        <div class="col-md-7">
          <h2><strong><?= $detail['nama_produk']; ?></strong></h2>
          <h4>Rp. <?= number_format($detail['harga_produk']); ?>,-</h4>
          <h5>Stok : <?= $detail['stok_produk']; ?></h5>
          <form action="" method="post">
            <div class="form-group">
              <div class="input-group">
                <input type="number" min="1" max="<?= $detail['stok_produk']; ?>" class="form-control" name="jumlah">
                <div class="input-group-btn">
                  <button class="btn btn-primary" name="beli">beli</button>
                </div>
              </div>
            </div>
          </form>
          <p><?= $detail['deskripsi_produk']; ?></p>
        </div>

      </div>
    </div>
  </section>
</body>

  <!-- footer -->
  <?php include 'user/templates/footer.php'; ?>
