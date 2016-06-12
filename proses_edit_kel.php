<?php
	include "koneksi/koneksi.php";
		$a = $_POST['nip'];
		$b = $_POST['nkel'];
		$c = $_POST['tglkawin'];
		$d = $_POST['nmortu'];
		$e = $_POST['ket'];
			$data = mysql_query("select * from data_keluarga");
			if (mysql_num_rows($data)==0){
				$query = mysql_query("insert into data_keluarga values ('$a','$b','$c','$d','$e')");
			}else{
				$query = mysql_query("update data_keluarga set  nip='$a',nama_kel='$b',tgl_kawin='$c',nama_ortu='$d',keterangan='$e' where nip='$a'");
			}
		
	
	if ($query){
		header('location:profil.php');
	}else{
		header('location:data_keluarga.php?nip='.$a);
	}
?>