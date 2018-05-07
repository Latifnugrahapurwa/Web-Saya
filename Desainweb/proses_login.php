 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>proses</title>
  </head>
  <body>
<?php

		$username=$_POST['Nama'];
		$password=$_POST['Password'];

if ($username == "") {
  header("location:login.php");
}
else {
  $pdo = new PDO('mysql:host=localhost;dbname=webdesa (1)','root','');
  $exec=$pdo->prepare("SELECT * FROM pengguna WHERE Nama = :username AND Password = :password");
  $exec->execute([
    'username' => $username,
    'password' => $password
  ]);

  $exec->setFetchMode(PDO::FETCH_ASSOC);
  $data = $exec->fetchAll();
  if (count($data) > 0) {
  $data = $data[0];
  header("location: beranda.php");
  }else{
    header("location: login.php?error=1");
  }
  exit;

  if ($data=="") {
    header("location:index.php");
  }

  else {
    $query = 'SELECT * from pengguna where Password ="'.$password.'"';
    $hasil_p = mysql_query($query);
    $data_p = mysql_fetch_array($hasil);
    $data_p[0];

    if ($data_p=="") {
      header("location:beranda.[php]");
    }

    else {
      session_start();
      $_SESSION["pengguna"] = $username;
      header("location:beranda.php");
    }
  }
  mysql_close($connect);
}

 ?>

  </body>
</html>
