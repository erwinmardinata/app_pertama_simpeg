<?php 
	include "koneksi/koneksi.php";
	
	 	$a = $_POST['nip'];
		$b = $_POST['p_lama'];
		$c = $_POST['p_baru'];
	
		$query = mysql_query("update data_pegawai set password='$c' where password='$a'");
		if ($query){
		header('location:profil.php');
	}else{
		header('location:ubah_pass.php?nip='.$a);
	}
?>