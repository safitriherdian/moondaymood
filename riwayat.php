<?php
session_start();
//koneksi ke database
include 'koneksi.php';

// Jika tidak ada session pelanggan (belum login)
if (!isset($_SESSION['pelanggan']) or empty($_SESSION['pelanggan'])) {
	echo "<script>alert('Silahkan login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}

// if(!isset($_SESSION["keranjang"])){
//   // Diarahkan ke ke index.php
//   echo "<script>alert('Belum ada riwayat pembayaran!')</script>";
//   echo "<script>location='index.php';</script>";
// }

// echo "<pre>";
// print_r($_SESSION['pelanggan']);
// echo "</pre>";

?>

<!-- view -->
<?php include 'user/view/riwayat.php'; ?>