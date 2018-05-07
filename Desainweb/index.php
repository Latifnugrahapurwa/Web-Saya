<?php
session_start();
if (isset($_SESSION['username'])){
echo"Anda Telah Login, Silahkan masuk ke <a href='admin.php'>Admin</a><br>Jika Anda Ingin Logout <a href='logout.php'>Klik Di Sini</a>"
?>

<?php
}else{
?>

<!DOCTYPE html>
<html>
<head>
 <title>Cara Membuat Form Login Sederhana Tapi Berkelas</title>
 <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
  <?php if (isset($_GET['error'])): ?>
    <script>
      alert("Gagal Login!!!");
    </script>
  <?php endif; ?>

<div class="login">

    <h2 class="login-header">Login Web Desa</h2>
        <form class="login-container" method="post" action="proses_login.php">
            <p>
              <input type="text" required name="Nama" value="" autocomplete="off" placeholder="Nama">
          </p>
            <p>
              <input type="Password" required name="Password" value="" autocomplete="off" placeholder="password"><br> <br>
            </p>
            <p>
                <input type="submit" value="Log in"><br>
                <a href="tambah_akun.php"><input type="text" name="" value="Tambah akun"></a>
            </p>
        </form>
</div>
</body>
</html>
<?php
}
?>