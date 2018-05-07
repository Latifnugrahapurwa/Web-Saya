<?php  

global $koneksi;

$server= "localhost";  
$username = "root";   
$password = "";   
$database = "webdesa (1)";  
  
$koneksi = mysql_connect($server,$username,$password) 
if(!$koneksi) {
    die ("Koneksi Gagal" .mysqli_connect_error());  
} 
     
  
mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );  
  
?> 