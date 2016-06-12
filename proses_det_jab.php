<?php
	include "koneksi/koneksi.php";
	
	 	$a = $_POST['nip'];
		$b = $_POST['jabatan'];
		$c = $_POST['gapok'];
		$d = $_POST['mulai'];
	
		$query = mysql_query("update det_jab set nip='$a',jabatan='$b',gapok='$c',ter_mu='$d' where nip='$a')");
		
	if ($query){
		header('location:profil.php');
	}else{
		header('location:proses_dataprib.php?nip='.$a);
	}
?>