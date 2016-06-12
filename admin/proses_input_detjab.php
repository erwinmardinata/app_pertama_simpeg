<?php
	include "../koneksi/koneksi.php";
	
	$a = $_POST['nip'];
	$b = $_POST['jabatan'];
	$c = $_POST['gapok'];
	$d = $_POST['mulai'];
	
	$query = mysql_query("insert into det_jab values ('$a','$b','$c','$d')");
	if ($query){
		header('location:home.php?pesan=sukses');
	}else{
		header('location:input_detjab.php?pesan=gagal_bro');
	}
?>