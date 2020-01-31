<?php include("config.php");

$sql = "INSERT INTO employee (name, title, salary) VALUES ('Bayu Raditya', 'Programmer', '4500000')";
if (mysqli_query($koneksi, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>