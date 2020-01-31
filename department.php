<?php include("config.php");

$sql = "INSERT INTO department (id_department, name) VALUES ('1', 'HRD')";
if (mysqli_query($koneksi, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>