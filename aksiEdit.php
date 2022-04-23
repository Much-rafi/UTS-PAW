<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "UPDATE tbl_089 set nama_089='$nama', email_089 ='$email' where id_089=$id";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Update Data Gagal";
} else {
	echo "Update Data Berhasil <br>";
	echo "<a href='tbl_089.php'> Show Data</a>";
}
?>