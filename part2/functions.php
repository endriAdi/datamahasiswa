<?php

function koneksi(){
	return mysqli_connect('localhost', 'root', '', 'datamahasiswa');
}

function query($query)
{
	$conn=koneksi();

	$result = mysqli_query($conn, $query);

	//jika hasilnya hanya 1 data
	if (mysqli_num_rows($result)==1) {
		return mysqli_fetch_assoc($result);
	}

	$rows=[];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}

	return $rows;
}

function tambah($data){
	$conn=koneksi();

	$nama=htmlspecialchars($data['nama']);
	$nim=htmlspecialchars($data['nim']);
	$email=htmlspecialchars($data['email']);
	$jurusan=htmlspecialchars($data['jurusan']);
	$foto=htmlspecialchars($data['foto']);
	$query="INSERT INTO mahasiswa VALUES (null,'$foto', '$nim', '$nama', '$email', '$jurusan')";
	
	mysqli_query($conn, $query)OR die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}

function hapus($id){
	$conn=koneksi();
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa=$id") OR die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function ubah($data){
	$conn=koneksi();

	$id=$data['id_mahasiswa'];
	$nama=htmlspecialchars($data['nama']);
	$nim=htmlspecialchars($data['nim']);
	$email=htmlspecialchars($data['email']);
	$jurusan=htmlspecialchars($data['jurusan']);
	$foto=htmlspecialchars($data['foto']);
	$query="UPDATE mahasiswa SET
			foto_mahasiswa='$foto',
			nim='$nim',
			nama_mahasiswa='$nama',
			email_mahasiswa='$email',
			jurusan='$jurusan' 
			WHERE id_mahasiswa=$id
			";
	
	mysqli_query($conn, $query)OR die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$conn=koneksi();
	$query="SELECT * FROM mahasiswa WHERE 
		nama_mahasiswa LIKE '%$keyword%' OR
		nim LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%'
		";

	$result=mysqli_query($conn, $query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}

	return $rows;
}
