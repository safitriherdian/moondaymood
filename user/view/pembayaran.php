<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'user/templates/header.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
  <br><br><br><br><br><br><br>
  <section class="content">
    <div class="container">
      <h1><strong>Konfirmasi Pembayaran</strong></h1>
      <p>Kirim bukti pembayaran anda disini</p>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info">total tagihan anda <strong>Rp. <?= number_format($detpem['total_pembelian']); ?>,-</strong></div><br>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Nama Penyetor</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
              <label for="">Bank</label>
              <input type="text" class="form-control" name="bank">
            </div>
            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" min="1">
            </div>
            <div class="form-group">
              <label for="">Foto Bukti</label>
              <input type="file" class="form-control" name="bukti">
              <p class="text-danger">foto bukti harus JPG maksimal 2 MB</p>
            </div>
            <button class="btn btn-primary" name="kirim">Kirim</button>
          </form>

          <?php
          // Jika tombol kirim di pencet
          if (isset($_POST['kirim'])) {
            // Upload dulu foto bukti
            $namabukti = $_FILES['bukti']['name'];
            $lokasibukti = $_FILES['bukti']['tmp_name'];
            $namafiks = date('YmdHis') . $namabukti;
            move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

            $nama = $_POST['nama'];
            $bank = $_POST['bank'];
            $jumlah = $_POST['jumlah'];
            $tanggal = date('Y-m-d');

            // Insert ke tabel pembayaran
            $koneksi->query("INSERT INTO pembayaran(id_pembelian, nama, bank, jumlah, tanggal, bukti) VALUES('$idpem', '$nama', '$bank', '$jumlah', '$tanggal', '$namafiks')");

            // Update data pembelian dari pending menjadi sudah kirim pembayaran
            $koneksi->query("UPDATE pembelian SET status_pembelian='Sudah Kirim Pembayaran' WHERE id_pembelian='$idpem'");

            echo "<script>alert('Terima kasih sudah melakukan pembayaran');</script>";
            echo "<script>location='riwayat.php';</script>";
          }
          ?>

        </div>
      </div>
    </div>
  </section>
</body>

<!-- footer -->
<?php include 'user/templates/footer.php'; ?>