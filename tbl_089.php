<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
	<table border="1" width="700px">
		<caption><b>TABEL MAHASISWA RAFI</b></caption>
		<tr>
			<td><b>ID Mahasiswa</b></td>
			<td><b>Nama Mahasiswa</b></td>
			<td><b>Email Mahasiswa</b></td>
			<td><b>Aksi</b></td>
		</tr>
			<?php
			include "koneksi.php";
			$sql = "SELECT * from tbl_089";
			$hasil = mysqli_query($koneksi,$sql);
			while($row =mysqli_fetch_array($hasil))
			{
			?>
		<tr>
			<td><?=$row['id_089'];?></td>
			<td><?=$row['nama_089'];?></td>
			<td><?=$row['email_089'];?></td>
			<td><a href="formEdit.php?id=<?=$row['id_089']?>">Edit | <a href="delete.php?id=<?=$row['id_089']?>"> Delete</td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="4" align="center"><?php
				echo "<a href='formInput.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
</body>
</html>
