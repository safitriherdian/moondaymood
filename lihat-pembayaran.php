<?php
session_start();
//koneksi ke database
include 'koneksi.php';

$id_pembelian = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM pembayaran JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembelian.id_pembelian='$id_pembelian'");
$detbay = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detbay);
// echo "</pre>";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// Jika belum ada pembayaran
if(empty($detbay)){
  echo "<script>alert('Belum ada data pembayaran!');</script>";
  echo "<script>location='riwayat.php';</script>";
}

// Jika data pelanggan yang bayar tidak sesuai yang login
if($_SESSION['pelanggan']['id_pelanggan'] != $detbay['id_pelanggan']){
  echo "<script>alert('Akses ditolak!');</script>";
  echo "<script>location='riwayat.php';</script>";
}

?>

<!-- view -->
<?php include 'user/view/lihat-pembayaran.php'; ?>