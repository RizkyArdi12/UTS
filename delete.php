<?php
include 'conn.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_mhsw WHERE mhsw_id='$id'");
if($query){
	echo "<script>alert('Delete berhasil');</script>";
	echo "<script>window.location.href = 'index.php';</script>";
}else{
	echo "<script>alert('Delete gagal');</script>";
	echo "<script>window.location.href = 'index.php';</script>";
}