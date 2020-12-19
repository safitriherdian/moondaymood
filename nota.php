<?php
session_start();

// Koneksi ke database
include 'koneksi.php';

$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]'");
$detail = $ambil->fetch_assoc();

// jika pelanggan yang beli tidak sama dengan pelanggan yang login, maka diarahkan ke riwayat (karena tidak berhak melihat nota orang lain)
// Pelanggan yang beli harus pelanggan yang login
// Mendapatkan id_pelanggan yang beli
$idpelangganyangbeli = $detail['id_pelanggan'];

// Mendapatkan id_pelanggan yang login
$idpelangganyanglogin = $_SESSION['pelanggan']['id_pelanggan'];

if($idpelangganyangbeli !== $idpelangganyanglogin){
  echo "<script>alert('Akses ditolak!');</script>";
  echo "<script>location='riwayat.php';</script>";
  exit();
}


?>

<!-- view -->
<?php include 'user/view/nota.php'; ?>