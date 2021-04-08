<?php
include 'conn.php';
if(@$_POST['submit']){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$query = mysqli_query($conn, "INSERT INTO tb_mhsw(mhsw_nim, mhsw_nama, mhsw_alamat) VALUES('$nim', '$nama', '$alamat')");
	if($query){
		echo "<script>alert('Tambah Mahasiswa Berhasil');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}else{
		echo "<script>alert('Tambah Mahasiswa Gagal');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}
}
?>
<h1>Edit Data</h1>
<form action="" method="POST">
	<p>NIM : </p><input type="text" name="nim"><br><br>
	<p>Nama : </p><input type="text" name="nama"><br><br>
	<p>Alamat : </p><input type="text" name="alamat"><br><br>
	<input type="submit" name="submit" value="Simpan">
</form>