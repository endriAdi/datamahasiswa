<?php  
require 'functions.php';

//ambil dari URL
$id=$_GET['id'];

//query mahasiswa berdasarkan id
$m=query("SELECT * FROM mahasiswa WHERE id_mahasiswa=$id");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<h3>Detail Mahasiswa</h3>
	<ul>
		<li><img src="img/<?php echo $m['foto_mahasiswa'] ?>"></li>
		<li>NIM : <?php echo $m['nim'] ?></li>
		<li>Nama : <?php echo $m['nama_mahasiswa'] ?></li>
		<li>Email : <?php echo $m['email_mahasiswa'] ?></li>
		<li>Jurusan : <?php echo $m['jurusan'] ?></li>
		<li><a href="">Ubah</a> | <a href="">Hapus</a></li>
		<li><a href="latihan3.php">kembali</a></li>
	</ul>

</body>
</html>