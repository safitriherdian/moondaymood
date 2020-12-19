    <!DOCTYPE html>
    <html lang="en">

    <!-- header -->
    <?php include 'user/templates/header.php'; ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lihat Pembayaran</title>
        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    </head>

    <body>
        <br><br><br><br><br><br><br>
        <section class="content">
            <div class="container">
                <h1><strong>Pembayaran</strong></h1><br><br>
                <div class="row">
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <td><?= $detbay['nama']; ?></td>
                            </tr>
                            <tr>
                                <th>Bank</th>
                                <td><?= $detbay['bank']; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td><?= $detbay['tanggal']; ?></td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>Rp. <?= number_format($detbay['jumlah']); ?>,-</td>
                            </tr>
                            <tr>
                                <th>No Resi</th>
                                <td><?= ($detbay['resi_pengiriman']); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="bukti_pembayaran/<?= $detbay['bukti']; ?>" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-info">
                            <p>
                                Silahkan menunggu konfirmasi pembayaran<br>
                                <strong>Jika sudah dikonfirmasi akan muncul no resi guna melakukan tracking barang</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <!-- footer -->
    <?php include 'user/templates/footer.php'; ?>