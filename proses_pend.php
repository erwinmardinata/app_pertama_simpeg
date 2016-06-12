<?php
	include "koneksi/koneksi.php";
	$a = $_POST['nip'];
	$b = $_POST['jenjang'];
	$c = $_POST['sekolah'];
	$d = $_POST['nmrijasa'];
	$e = $_POST['tm'];
	$f = $_POST['tl'];
	$g = $_POST['fak'];
	$h = $_POST['jur'];
	$query = mysql_query("insert into data_pend (nip,jenjang,nama_sekolah,no_ijazah,t_masuk,t_lulus,fakultas,jurusan) values ($a,'$b','$c','$d','$e','$f','$g','$h')");
	if ($query){
		header('location:profil.php');
	}else{
		header('location:edit_riwayat_pend.php');
	}
?>