<?php 
	include "../koneksi/koneksi.php";
	$id = $_GET['id'];
	
	$query=mysql_query("delete from upload where id='$id'");
	
	if ($query){
		header('location:input_file.php?pesan=sukses');
	}else{
		header('location:input_file.php?pesan=gagal');
	}
?>
