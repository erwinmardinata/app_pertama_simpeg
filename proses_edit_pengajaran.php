<?php
	include "koneksi/koneksi.php";
	$a = $_POST['id'];
	$b = $_POST['k_mk'];
	$c = $_POST['n_mk'];
	$d = $_POST['sks'];
	$e = $_POST['semester'];
	$f = $_POST['kelas'];
	$g = $_POST['hari'];
	$query = mysql_query("update pengajaran set kode_mk='$b',nama_mk='$c',sks='$d',semester='$e',kelas='$f',hari='$g' where id='$a' )");
	if ($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:tambah_pengajaran.php');
	}
?>