<?php
	include "../koneksi/koneksi.php";
	
	$a = $_POST['nip'];
	$b = $_POST['nkel'];
	$c = $_POST['tglkawin'];
	$d = $_POST['nmortu'];
	$e = $_POST['ket'];
	
	$queri ="insert into data_keluarga values ('$a','$b','$c','$d','$e')";
	$ambil = mysql_query($queri);
	if ($ambil){
		header('location:input_detjab.php?nip='.$a);
	}else{
		header('location:input_kel.php?pesan=eroor_bro');
	}
?>