<?php
include 'conn.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_mhsw WHERE mhsw_id='$id'");
$data = mysqli_fetch_array($query);

if(@$_POST['submit']){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$query = mysqli_query($conn, "UPDATE tb_mhsw SET mhsw_nim='$nim', mhsw_nama='$nama', mhsw_alamat='$alamat' WHERE mhsw_id='$id'");
	if($query){
		echo "<script>alert('Edit Mahasiswa Berhasil');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}else{
		echo "<script>alert('Edit Mahasiswa Gagal');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}
}
?>
<h1>Edit Data</h1>
<form action="" method="POST">
	<p>NIM : </p><input type="text" name="nim" value="<?= $data[1] ?>"><br><br>
	<p>Nama : </p><input type="text" name="nama" value="<?= $data[2] ?>"><br><br>
	<p>Alamat : </p><input type="text" name="alamat" value="<?= $data[3] ?>"><br><br>
	<input type="submit" name="submit" value="Simpan">
</form>