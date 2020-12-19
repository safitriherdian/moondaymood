<?php
session_start();

//koneksi ke database
include 'koneksi.php';

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
  echo "<script>alert('Keranjang kosong, silahkan pilih produk!');</script>";
  echo "<script>location='index.php';</script>";
}

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
?>

<!-- view -->
<?php include 'user/view/keranjang.php'; ?>