<?php

$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseDB = 'db_perusahaan'

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseDB); 

if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
echo 'Koneksi Berhasil';
?>