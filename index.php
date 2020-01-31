<?php
include_once("config.php");
include_once("buatdb.php");
include_once("company.php");
include_once("department.php");
include_once("employee.php");
$result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY id_ ASC");
?>

<html>
<head>    
    <title>Halaman Utama</title>
</head>

<body>

    <table width='80%' border=1>

    <tr>
        <th>Nama Pegawai</th> <th>Jabatan</th> <th>Gaji</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['employee.name']."</td>";
        echo "<td>".$user_data['employee.title']."</td>";
        echo "<td>".$user_data['employee.salary']."</td>";       
    }
    ?>
    </table>
</body>
</html>