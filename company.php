<?php include("config.php");

$sql = "INSERT INTO company (id_company, name) VALUES ('1', 'PT Dirgantara')";
if (mysqli_query($koneksi, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>