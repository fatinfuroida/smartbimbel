<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "ci4_test"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ 
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>
