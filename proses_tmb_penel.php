<?php
	include "koneksi/koneksi.php";
	$a = $_POST['nip'];
	$b = $_POST['judul'];
	$c = $_POST['tgl_pub'];
	$d = $_POST['tempat'];
	$e = $_POST['peran'];
	$query = mysql_query("insert into penelitian (nip,judul,tgl_publikasi,tempat,peran)values($a,'$b','$c','$d','$e')");
	if ($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:tambah_penelitian.php');
	}
?>