<?php
	include "koneksi/koneksi.php";
	session_start();
	
	$nip = $_POST['nip'];
	$pass = $_POST['pass'];
	
	$user = mysql_real_escape_string($user);
	$pass = mysql_real_escape_string($pass);
	
	if (empty($nip) && empty($pass)) {
	header('location:index.php?error=1');
	break;
	} else if (empty($nip)) {
	header('location:index.php?error=2');
	break;
	} else if (empty($pass)) {
	header('location:index.php?error=3');
	break;
}
	
	$q =mysql_query("select * from data_pegawai where nip='$nip' and password='$pass'");
	if(mysql_num_rows($q) == 1){
		$row = mysql_fetch_assoc($q);
		$_SESSION['nip'] = $row['nip'];
		$_SESSION['level'] = $row['level'];
		header('location:profil.php');
	}else{
		header('location:index.php?error=4');
	}
?>