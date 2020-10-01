<?php  
//koneksi database
$conn=mysqli_connect('localhost', 'root', '', 'datamahasiswa');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//udah data ke dalam array
// $row = mysqli_fetch_row($result);  //array numeric 
// $row = mysqli_fetch_assoc($result); //array associative
// $row = mysqli_fetch_array($result); //keduanya
$rows=[];
while ($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}

//tampung ke variabel mahasiswa
$mahasiswa=$rows;

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
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>
	<?php $i=1; ?>
	<?php foreach ($mahasiswa as $m): ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><img src="img/<?php echo $m['foto_mahasiswa']; ?>"></td>
			<td><?php echo $m['nim'] ?></td>
			<td><?php echo $m['nama_mahasiswa'] ?></td>
			<td><?php echo $m['email_mahasiswa'] ?></td>
			<td><?php echo $m['jurusan'] ?></td>
			<td>
				<a href="">Detail</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

</body>
</html>