<?php
//koneksi ke database
include 'koneksi.php';

// Jika tombol daftar ditekan
if(isset($_POST['daftar'])){
  // Mengambil isian nama, email, password, alamat, telepon
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];

  // Cek apakah email sudah digunakan atau belum
  $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
  $yangcocok = $ambil->num_rows;
  if($yangcocok == 1){
    echo "<div class='alert alert-danger'>Pendaftaran gagal, email sudah digunakan!</div>";
		echo "<meta http-equiv='refresh' content='1;url=daftar.php'>";
  }
  else{
    // Insert ke tabel pelanggan
    $koneksi->query("INSERT INTO pelanggan(email_pelanggan, password_pelanggan, nama_pelanggan, telepon_pelanggan, alamat_pelanggan) VALUES('$email', '$password', '$nama', '$telepon', '$alamat')");
    echo "<div class='alert alert-success'>Pendaftaran sukses, Silahkan login</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }

}

?>

<!-- view -->
<?php include 'user/view/u_daftar.php'; ?>