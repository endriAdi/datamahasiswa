<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
}

require 'functions.php';

//tampung ke variabel mahasiswa
$mahasiswa=query("SELECT * FROM mahasiswa");

//ketika tombol cari di tekan
if (isset($_POST['cari'])) {
	$mahasiswa=cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<a href="logout.php">Log-Out</a>
	<h3>Daftar Mahasiswa</h3>
	<a href="tambahdata.php" class="btn btn-primary">Tambah Data</a><br><br>
	<form action="" method="post">
		<input type="text" name="keyword" autocomplete="off" autofocus placeholder="Masukan Kata Kunci">
		<button type="submit" name="cari">Cari</button>
	</form><br>
		
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	<?php if (empty($mahasiswa)) : ?>
		<tr>
			<td colspan="4"><p>Data Mahasiswa Tidak Ditemukan</p></td>
		</tr>
	<?php endif; ?>

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