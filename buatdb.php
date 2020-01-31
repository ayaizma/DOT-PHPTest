<?php include("config.php");

$sql = 'CREATE Database db_perusahaan';
$buatdb = mysql_query( $sql, $koneksi );
if(! $buatdb )
{
  die('Pembuatan database, gagal: ' . mysql_error());
}
echo "Database db_perusahaan berhasil dibuat\n";

mysql_select_db('db_perusahaan');

$sql = 'CREATE TABLE company( '.
       'id_company INT NOT NULL AUTO_INCREMENT, '.
       'name VARCHAR(50) NOT NULL, '.
       'primary key ( id_company ))';
 
mysql_select_db('db_perusahaan');
$buattabel = mysql_query( $sql, $koneksi );
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysql_error());
}
echo "Tabel Company berhasil dibuat\n";

$sql = 'CREATE TABLE department( '.
       'id_department INT NOT NULL AUTO_INCREMENT, '.
       'name VARCHAR(50) NOT NULL, '.
       'primary key ( id_department ))';
 
mysql_select_db('db_perusahaan');
$buattabel = mysql_query( $sql, $koneksi );
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysql_error());
}
echo "Tabel Department berhasil dibuat\n";

$sql = 'CREATE TABLE employee( '.
       'id_employee INT NOT NULL AUTO_INCREMENT, '.
       'name VARCHAR(30) NOT NULL, '.
       'title  VARCHAR(30) NOT NULL, '.
       'salary   INT NOT NULL, '.
       'primary key ( id_employee ))';
 
mysql_select_db('db_perusahaan');
$buattabel = mysql_query( $sql, $koneksi );
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysql_error());
}
echo "Tabel Employee berhasil dibuat\n";

?>