<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'user/templates/header.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pencarian</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
  <br><br><br><br><br><br><br>
  <section class="content">
    <div class="container">
      <h3><strong>Hasil Pencarian: <?= $keyword; ?></strong></h3> <br>

      <?php if (empty($semuadata)) : ?>
        <div class="alert alert-danger">Produk <strong><?= $keyword; ?></strong> tidak ditemukan</div>
      <?php endif; ?>

      <div class="row">
        <?php foreach ($semuadata as $key => $value) : ?>
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="foto_produk/<?= $value['foto_produk']; ?>" class="img-responsive">
              <div class="caption">
                <h3><?= $value['nama_produk']; ?></h3>
                <h5>Rp. <?= number_format($value['harga_produk']); ?>,-</h5>
                <a href="beli.php?id=<?= $value['id_produk']; ?>" class="btn btn-primary">beli</a>
                <a href="detail.php?id=<?= $value['id_produk']; ?>" class="btn btn-default">detail</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</body>

<!-- footer -->
<?php include 'user/templates/footer.php'; ?>