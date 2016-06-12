<?php
	include "koneksi/koneksi.php";
	$query = mysql_query("delete from data_pend where id=$_GET[id]");
	if ($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:profil.php?pesan=gagal');
	}
?>