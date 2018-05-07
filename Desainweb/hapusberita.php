<?php
require 'proses_berita.php';
  // HAPUS  Aartikel
  function xhapus($ID){
     global $conn;
     mysqli_query($conn,"DELETE FROM artikel WHERE ID = $ID");
     return mysqli_affected_rows($conn);

  }

  xhapus($_GET['ID']);
  header('location: konten.php');


 ?>
