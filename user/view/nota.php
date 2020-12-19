<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'user/templates/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
    <br><br><br><br><br><br><br>
    <section class="content">
        <div class="container">
            <h1><strong>Nota Pembelian</strong></h1><br>

            <!-- <h3>Data orang yang beli $session</h3> -->
            <!-- <pre><?php //print_r($detail); 
                        ?></pre> -->

            <!-- <h3>Data orang yang login di session</h3> -->
            <!-- <pre><?php //print_r($_SESSION); 
                        ?></pre> -->

            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-4">
                    <h3><strong>Deskripsi</strong></h3>
                    <strong>No. Pembelian : <?= $detail['id_pembelian']; ?></strong><br>
                    Tanggal : <?= date("d M Y", strtotime($detail['tanggal_pembelian'])); ?><br>
                    Total : Rp. <?= number_format($detail['total_pembelian']); ?>,-
                </div>
                <div class="col-md-4">
                    <h3><strong>Pelanggan</strong></h3>
                    <strong><?= $detail["nama_pelanggan"]; ?></strong><br>
                    <p>
                        <?= $detail["telepon_pelanggan"]; ?><br>
                        <?= $detail["email_pelanggan"]; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><strong>Pengiriman</strong></h3>
                    <strong><?= $detail['tipe']; ?> <?= $detail['distrik']; ?> <?= $detail['provinsi']; ?></strong><br>
                    Ongkos kirim : Rp. <?= number_format($detail['ongkir']); ?>,-<br>
                    Ekspedisi : <?= $detail['ekspedisi']; ?> <?= $detail['paket']; ?> <?= $detail['estimasi']; ?><br>
                    Alamat : <?= $detail['alamat_pengiriman']; ?>
                </div>
            </div>

            <table class="table table-bordered"><br>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Jumlah</th>
                        <th>Subberat</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <!-- Menampilkan data pembelian_produk -->
                    <?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian = '$_GET[id]'"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) : ?>
                        <tr>
                            <td><?= $no; ?>.</td>
                            <td><?= $pecah["nama"]; ?></td>
                            <td>Rp. <?= number_format($pecah["harga"]); ?>,-</td>
                            <td><?= $pecah["berat"]; ?> gram</td>
                            <td><?= $pecah["jumlah"]; ?></td>
                            <td><?= $pecah["subberat"]; ?> gram</td>
                            <td>Rp. <?= number_format($pecah["subharga"]); ?>,-</td>
                        </tr>
                        <?php $no++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-7">
                    <div class="alert alert-info">
                        <p>
                            Silahkan lakukan pembayaran Rp. <?= number_format($detail['total_pembelian']); ?>,- ke <br>
                            <strong>BANK BRI 123-111-111 AN Moonday Mood</strong>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

<!-- footer -->
<?php include 'user/templates/footer.php'; ?>