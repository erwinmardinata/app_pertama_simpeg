<?php
	include "../koneksi/koneksi.php";
	$a = date("y-m-d");
	$file = $_FILES['upfile']['name'];
	$lokasi = $_FILES['upfile']['tmp_name'];
	$folder = '../admin/file/';
	$unggah = $folder.$file;
	
	
	move_uploaded_file($lokasi,$unggah);
	$proses = "insert into upload (tgl,judul)values('$a','$file')";
	$masukkan = mysql_query($proses);
	if ($masukkan){
		header('location:input_file.php?pesan=sukses');
	}else{
		header('location:input_file.php?pesan=gagal');
	}
?>