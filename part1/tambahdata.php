<?php  
require 'functions.php';

//cek apakah tombol tambah  sudah ditekan
if (isset($_POST['tambah'])) {
	if( tambah($_POST)> 0 ){
		echo "<script> 
		alert('data Berhasil ditambahkan');
		document.location.href='latihan3.php';
		</script>";
	}else {
		echo "<script> 
		alert('data gagal ditambahkan');
		document.location.href='latihan3.php';
		</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<form action="" method="post" enctype="multipart">
		<ul>
			<li>
				<label>
					Nama :
					<input type="text" name="nama" autofocus autocomplete="off" required>
				</label>
			</li>
			<li>
				<label>
					NIM :
					<input type="number" name="nim" autocomplete="off" required>
				</label>
			</li>
			<li>
				<label>
					Email :
					<input type="email" name="email" autocomplete="off" required>
				</label>
			</li>
			<li>
				<label>
					Jurusan :
					<input type="text" name="jurusan" autocomplete="off" required>
				</label>
			</li>
			<li>
				<label>
					Foto :
					<input type="text" name="foto" required>
				</label>
			</li>
			<li>
				<button type="submit" name="tambah">Tambah Data</button>
			</li>
			<li>
				<a href="latihan3.php">kembali</a>
			</li>
		</ul>
	</form>

</body>
</html>