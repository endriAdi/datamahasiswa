<?php 
require 'functions.php';

//ambil id dari URL
$id=$_GET['id'];

//jika tidak ada id di URL
if (!isset($_GET['id'])) {
	header("location:index.php");
	exit;
}

//query mahasiswa berdasarkan id
$m=query("SELECT * FROM mahasiswa WHERE id_mahasiswa=$id");

//cek apakah tombol ubah  sudah ditekan
if (isset($_POST['ubah'])) {
	if( ubah($_POST)> 0 ){
		echo "<script> 
		alert('data Berhasil diubah');
		document.location.href='index.php';
		</script>";
	}else {
		echo "<script> 
		alert('data gagal diubah');
		document.location.href='index.php';
		</script>";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h3>Ubah Data Mahasiswa</h3>
	<form action="" method="post" enctype="multipart">
		<input type="hidden" name="id_mahasiswa" value="<?php echo $m ['id_mahasiswa'] ?>">
		<ul>
			<li>
				<label>
					Nama :
					<input type="text" name="nama" autofocus autocomplete="off" required value="<?php echo $m ['nama_mahasiswa'] ?>">
				</label>
			</li>
			<li>
				<label>
					NIM :
					<input type="number" name="nim" autocomplete="off" required value="<?php echo $m ['nim'] ?>">
				</label>
			</li>
			<li>
				<label>
					Email :
					<input type="email" name="email" autocomplete="off" required value="<?php echo $m ['email_mahasiswa'] ?>">
				</label>
			</li>
			<li>
				<label>
					Jurusan :
					<input type="text" name="jurusan" autocomplete="off" required value="<?php echo $m ['jurusan'] ?>">
				</label>
			</li>
			<li>
				<label>
					Foto :
					<input type="text" name="foto" required value="<?php echo $m ['foto_mahasiswa'] ?>">
				</label>
			</li>
			<li>
				<button type="submit" name="ubah">Simpan Perubahan</button>
			</li>
			<li>
				<a href="index.php">kembali</a>
			</li>
		</ul>
	</form>

</body>
</html>