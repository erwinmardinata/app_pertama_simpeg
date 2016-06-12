<?php
	include "koneksi/koneksi.php";
	$a = $_POST['id'];
	$b = $_POST['jenjang'];
	$c = $_POST['sekolah'];
	$d = $_POST['nmrijasa'];
	$e = $_POST['tm'];
	$f = $_POST['tl'];
	$g = $_POST['fak'];
	$h = $_POST['jur'];
	$query = mysql_query("update data_pend set jenjang='$b',nama_sekolah='$c',no_ijazah='$d',t_masuk='$e',t_lulus='$f',fakultas='$g',jurusan='$h' where id='$a'");
	if ($query){
		header('location:profil.php');
	}else{
		header('location:edit_riwayat_pendup.php?id='.$a);
	}
?>