<?php
session_start();
if (isset($_SESSION['username'])){
echo"Anda Telah Login, Silahkan masuk ke <a href='admin.php'>Admin</a><br>Jika Anda Ingin Logout <a href='logout.php'>Klik Di Sini</a>"
?>

<?php
}else{
?>
<html>
<title>Login Admin</title>
<style type="text/css">
<!--
.judul {
 background-color: #00FF00;
}
-->
</style>
<?php if (isset($_GET['error'])): ?>
    <script>
      alert("Anda gagal masuk, silahkan coba kembali");
    </script>
  <?php endif; ?>

    <div class="konten">
        <div class="kepala">
          <h2 class="judul">Login</h2>
        </div>
        <div class="tulisan">
          <form action="proses_login.php" method="post">
            <div class="grup">
              <label for="email">E-mail Address</label>
              <input type="text" required name="email" autocomplete="off" placeholder="Masukkan Alamat Email Anda">
            </div>
            <div class="grup">
              <label for="password">Password</label>
              <input type="password" required name="password" autocomplete="off" placeholder="Masukkan password Anda">
            </div>
            <div class="grup">
              <input type="submit" name="button" value="login">
            </div>
            <div class="grup2">
              <a  class="text1" href="Lupa.php" style="text-decoration:none;">Lupa password?</a>
            </div>
            <div class="grup2">
              <a class="text2" href="signup.php" style="text-decoration:none;">Buat akun baru</a>
            </div>
            </form>
        </div>
    </div>
</html>
<?php
}
?>