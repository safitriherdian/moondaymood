<?php
$semuadata = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while ($tiap = $ambil->fetch_assoc()) {
  $semuadata[] = $tiap;
}

// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";

?>

<!-- DESAIN HALAMAN -->
<h1><strong>Data Kategori</strong></h1><br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <!-- <th>Aksi</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($semuadata as $key => $value) : ?>
      <tr>
        <td><?= $key + 1; ?>.</td>
        <td><?= $value['nama_kategori']; ?></td>
        
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php?halaman=tambahkategori" class="btn btn-primary">Tambah Kategori</a>