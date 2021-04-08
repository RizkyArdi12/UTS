<?php 
include 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM tb_mhsw");
?>
<html>
<head>
  <title>Absensi Mahasiswa</title>
</head>
<body>
 <center> <h1>Absensi Mahasiswa </h1> </center>
<center> <a href="tambah.php"><p>Tambah Data</p></a> </center> 
<body bgcolor="#7FFFD4">
<center> <table border = "4" style="width: "50%" hight="20%">
 <tr>
 <td>NO</td>
 <td>NIM</td>
 <td>NAMA</td>
 <td>ALAMAT</td>
 <td colspan="2">ACTION</td>
 </tr></center>

 <?php while($data = mysqli_fetch_array($query)){ ?>
 	<tr>
 		<td><?= $data[0] ?></td>
 		<td><?= $data[1] ?></td>
 		<td><?= $data[2] ?></td>
 		<td><?= $data[3] ?></td>
 		<td><a href="edit.php?id=<?= $data[0] ?>">Edit</a></td>
 		<td><a href="delete.php?id=<?= $data[0] ?>">Delete</a></td>
 	</tr>
 	</html>
 </body>
 <?php } ?>