<?php
include 'koneksi.php';

$keyword = $_GET['keyword'];

$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR deskripsi_produk LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc()){
  $semuadata[] = $pecah;
}

// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";

?>


<!-- view -->
<?php include 'user/view/pencarian.php'; ?>