<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- <title>Moonday Mood</title> -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="user/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.css">

    <link rel="stylesheet" href="user/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="user/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="user/assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

     <!-- ***** Header Area Start ***** -->
     <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="keranjang.php">Keranjang</a></li>
             
              <!-- Jika sudah login (ada login pelanggan) -->
              <?php if (isset($_SESSION["pelanggan"])) : ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="riwayat.php">Riwayat Belanja</a></li>

                <!-- Selain itu (belum login / belum ada session pelanggan) -->
              <?php else : ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="daftar.php">Daftar</a></li>
              <?php endif; ?>
              <li><a href="checkout.php">Checkout</a></li>

              <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                <input type="text" class="form-control" name="keyword">
                <button class="btn btn-primary">Cari</button>
              </form>
            </ul>

        </div>
        <!-- ***** Menu End ***** -->

        </nav>
      </div>
    </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->