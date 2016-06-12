<?php
	include "koneksi/koneksi.php";
	$a = $_GET['id'];
	$query = mysql_query("delete from penelitian where id='$a'");
	if($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:profil.php?pesan=gagal');
	}
?>