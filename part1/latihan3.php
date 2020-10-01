<?php  
require 'functions.php';

//tampung ke variabel mahasiswa
$mahasiswa=query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	<?php $i=1; ?>
	<?php foreach ($mahasiswa as $m): ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><img src="img/<?php echo $m['foto_mahasiswa']; ?>"></td>
			<td><?php echo $m['nama_mahasiswa'] ?></td>
			<td>
				<a href="detail.php?id=<?php echo $m['id_mahasiswa']; ?>">Detail</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

</body>
</html>