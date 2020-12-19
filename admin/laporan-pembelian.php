<?php
$semuadata = [];
$tgl_mulai = "-";
$tgl_selesai = "-";
$status = "";
if (isset($_POST['kirim'])) {
  $tgl_mulai = $_POST['tglm'];
  $tgl_selesai = $_POST['tgls'];
  $status = $_POST['status'];

  $ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN pelanggan pl ON pm.id_pelanggan=pl.id_pelanggan WHERE status_pembelian='$status' AND tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai'");
  while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
  }

  // echo "<pre>";
  // print_r($semuadata);
  // echo "</pre>";

}
?>

<!-- DESAIN HALAMAN -->
<h1><strong>Laporan Pembelian dari <?= $tgl_mulai; ?> hingga <?= $tgl_selesai; ?></strong></h1><br><br>

<form action="" method="post">
  <div class="row">
    <div class="col-md-3">
      <label for="">Tanggal Mulai</label>
      <input type="date" class="form-control" name="tglm" value="<?= $tgl_mulai; ?>">
    </div>
    <div class="col-md-3">
      <label for="">Tanggal Selesai</label>
      <input type="date" class="form-control" name="tgls" value="<?= $tgl_selesai; ?>">
    </div>
    <div class="col-md-3">
      <label>Status</label>
      <select class="form-control" name="status">
        <option value="">Pilih Status</option>
        <option value="Lunas">Lunas</option>
        <option value="Barang Dikirim">Barang Dikirim</option>
        <option value="Batal">Batal</option>
        <option value="Pending">Pending</option>
        <option value="Sudah Kirim Pembayaran">Sudah Kirim Pembayaran</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="">&nbsp;</label><br>
      <button class="btn btn-primary" name="kirim">Lihat Laporan</button>
    </div>
  </div>
</form>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Pelanggan</th>
      <th>Tanggal</th>
      <th>Jumlah</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php $total = 0; ?>
    <?php foreach ($semuadata as $key => $value) : ?>
      <?php $total += $value['total_pembelian']; ?>
      <tr>
        <td><?= $key + 1; ?>.</td>
        <td><?= $value['nama_pelanggan']; ?></td>
        <td><?php echo date("d F Y", strtotime($value["tanggal_pembelian"])) ?></td>
        <td>Rp. <?= number_format($value['total_pembelian']); ?>,-</td>
        <td><?= $value['status_pembelian']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3">Total</th>
      <th>Rp. <?= number_format($total); ?>,-</th>
    </tr>
  </tfoot>
</table>