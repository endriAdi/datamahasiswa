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
	mysqli_query($conn, $query);

	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}