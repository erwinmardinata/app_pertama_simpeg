<?php
	include "koneksi/koneksi.php";
	$a = $_POST['id'];
	$b = $_POST['judul'];
	$c = $_POST['tgl_pub'];
	$d = $_POST['tempat'];
	$e = $_POST['peran'];
	$query = mysql_query("update jurnal set judul='$b',tgl_publikasi='$c',tempat='$d',peran='$e' where id='$a'");
	if ($query){
		header('location:profil.php?pesan=oke');
	}else{
		header('location:edit_jurnal.php?id='.$a);
	}
?>