<?php
session_start();

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Nama Sekolah</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="bg-light">
    <!-- navbar -->
     <div class="navbar">
        <div class="container">
            <!-- navbar brand -->
             <h2 class="nav-brand float-left"><a href="index.php">SMKN 1 Padaherang</a></h2>

             <!-- navbar menu -->
              <ul class="nav-menu float-left">
                <li><a href="index.php">Dashboard</a></li>

                <?php if($_SESSION['ulevel'] == 'Super Admin') { ?>

                <li><a href="pengguna.php">Pengguna</a></li>

                <?php }elseif($_SESSION['ulevel'] == 'Admin') { ?>
                <li><a href="jurusan.php">Jurusan</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li>
                    <a href="#">Pengaturan <i class="fa fa-caret-down"></i></a>
                
                    <!-- sub menu -->
                     <ul class="dropdown">
                        <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
                        <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                        <li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
                     </ul>
                </li>

                <?php } ?>

                <li>
                    <a href="#"><?=$_SESSION['uname'] ?> (<?=$_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

                    <!-- sub menu -->
                     <ul class="dropdown">
                        <li><a href="ubah-password.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                     </ul>
                </li>
              </ul>

              <div class="clearfix"></div>
        </div>
     </div>

     <!-- content -->
      <div class="content">

        <div class="container">

            <div class="box">

            <div class="box-header">
                Dashboard
            </div>

            <div class="box-body">
                <h3>Selamat Datang <?= $_SESSION['uname'] ?> di Panel Admin SMKN 1 Padaherang</h3>
            </div>

        </div>

      </div>

      <!-- footer -->
       <div class="footer">
        <div class="container text-center">
            Copyright &copy; 2026 - SMKN 1 Padaherang.
        </div>
       </div>

</body>
</html>