<?php
session_start();

// Koneksi ke database
include 'koneksi.php';

// Jika tidak ada session pelanggan (belum login)
if(!isset($_SESSION['pelanggan']) OR empty($_SESSION['pelanggan'])){
	echo "<script>alert('Silahkan login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}

// Mendapatkan id_pembelian dari url
$idpem = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detpem);
// print_r($_SESSION);
// echo "</pre>";

// Mendapatkan id_pelanggan yg beli
$id_pelanggan_beli = $detpem['id_pelanggan'];
// Mendapatkan id_pelanggan yg login
$id_pelanggan_login = $_SESSION['pelanggan']['id_pelanggan'];

if($id_pelanggan_beli != $id_pelanggan_login){
  echo "<script>alert('Akses ditolak!');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}

?>

<!-- view -->
<?php include 'user/view/pembayaran.php'; ?>