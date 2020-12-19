<?php
session_start();

//koneksi ke database
include 'koneksi.php';


// jika tombol login ditekan
if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Melakukan query pada tabel pelanggan
  $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

  // Mengecek akun yang cocok (email & password)
  $akunyangcocok = $ambil->num_rows;

  // Jika ada akun yang cocok
  if($akunyangcocok == 1){
    // Mendapatkan aku dalam bentuk array
    $akun = $ambil->fetch_assoc();

    // Simpan di session
    $_SESSION["pelanggan"] = $akun;
    echo "<div class='alert alert-success'>Login sukses</div>";

    // Jika sudah belanja
    if(isset($_SESSION['keranjang']) OR !empty($_SESSION['keranjang'])){
      echo "<meta http-equiv='refresh' content='1;url=checkout.php'>";
    }
    else{
      echo "<meta http-equiv='refresh' content='1;url=riwayat.php'>";
    }
  }
  else{
    // echo "<script>alert('Gagal login')</script>";
    // echo "<script>location='login.php';</script>";
    echo "<div class='alert alert-danger'>Login gagal!</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }
}
?>

<!-- view -->
<?php include 'user/view/u_login.php'; ?>