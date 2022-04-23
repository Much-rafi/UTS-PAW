<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from tbl_089 where id_089=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
		echo "Delete Gagal";
	} else {
		echo "Delete Berhasil<br>";
		echo "<a href='tbl_089.php'>Lihat Data</a>";
	}
?>