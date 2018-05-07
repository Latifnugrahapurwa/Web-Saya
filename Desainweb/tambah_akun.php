<?php
require 'proses_tambah.php';
if (isset($_POST["submit"])) {

// cek data berhasil ditamabahkan atau tidak
if ( tambah($_POST) > 0) {
  echo "
  <script>
    alert('Akun Berhasil Ditambah!!!');
    document.location.href= 'index.php';
  </script>
  ";
}else {
  echo "
  <script>
    alert('ada kesalahan!!!');
    document.location.href= 'index.php';
  </script>
  ";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="stylelogin.css">

  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Membuat!!!")
      </script>
    <?php endif; ?>

    <div class="Login">

      <img src="logo.png" alt="" class="avatar">
      <h2>Buat Akun Baru!!!</h2>

      <form class="login-container" action="" method="post">
        <p><input type="text" name="Nama" value="" required placeholder="Nama"></p>
<p>      <input type="Text" name="Email" value="" required placeholder="Email"></p>
<p>    <input type="Password" name="Password" required value="" placeholder="Password"></p>
<p>        <input type="Password" name="Password2" value="" required placeholder="Confirm Password"></p>

<p>      <button type="submit" name="submit">Tambah Akun</button><br><br>
      <a href="index.php">Sudah punya akun?</a><br></p>

      </form>

    </div>
  </body>
</html>
