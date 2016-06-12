<?php
	include "koneksi/koneksi.php";
	$a = $_POST['nip'];
	$b = $_POST['k_mk'];
	$c = $_POST['n_mk'];
	$d = $_POST['sks'];
	$e = $_POST['semester'];
	$f = $_POST['kelas'];
	$g = $_POST['hari'];
	$query = mysql_query("insert into pengajaran (nip,kode_mk,nama_mk,sks,semester,kelas,hari)values($a,'$b','$c','$d','$e','$f','$g')");
	if ($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:tambah_pengajaran.php');
	}
?>