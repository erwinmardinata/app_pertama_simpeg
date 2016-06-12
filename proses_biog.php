<?php
	include "koneksi/koneksi.php";
	$a = $_POST['nip']; 
	$c = $_POST['nama'];
	$b = addslashes(strip_tags($_POST['biog']));
	if ($_POST['status']=="baru"){
	$query = mysql_query("insert into biografi values ($a,'$c','$b')");
	}else{
	$query = mysql_query("update biografi set biogra = '$b' where nip = $a ");
	}
	
	if($query){
			header('location:profil.php');
	}else{
		header('location:tambah_biogr.php');
	}
?>