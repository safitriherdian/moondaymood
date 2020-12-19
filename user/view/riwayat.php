<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'user/templates/header.php'; ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Riwayat Belanja</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
	<br><br><br><br><br><br><br>
	<div class="container-fluid">
		<section class="content">
			<div class="container">
				<h1><strong>Riwayat Belanja, <?= $_SESSION['pelanggan']['nama_pelanggan']; ?><strong></h1><br>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Status</th>
							<th>Total</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						// Mendapatkan id_pelanggan yang login dari session
						$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
						$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan'");
						if ($ambil->num_rows == 0) :
						?>
							<tr>
								<td colspan="5">Tidak ada data riwayat... </td>
							</tr>
						<?php endif; ?>
						<?php
						while ($pecah = $ambil->fetch_assoc()) :
						?>
							<tr>
								<th><?= $no++; ?></th>
								<td><?= date("d F Y", strtotime($pecah['tanggal_pembelian'])); ?></td>
								<td>
									<?= $pecah['status_pembelian']; ?><br>
									<?php if (!empty($pecah['resi_pengiriman'])) : ?>
										Resi : <?= $pecah['resi_pengiriman']; ?>
									<?php endif; ?>
								</td>
								<td>Rp. <?= number_format($pecah['total_pembelian']); ?>,-</td>
								<td>
									<a href="nota.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-info">Nota</a>

									<?php if ($pecah['status_pembelian'] == 'Pending') : ?>
										<a href="pembayaran.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-success">Input Pembayaran</a>
									<?php else : ?>
										<a href="lihat-pembayaran.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-warning">Lihat Pembayaran</a>
									<?php endif; ?>

								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>

			</div>
		</section>
	</div>
	<br><br><br><br><br><br><br><br><br>
</body>

<!-- footer -->
<?php include 'user/templates/footer.php'; ?>