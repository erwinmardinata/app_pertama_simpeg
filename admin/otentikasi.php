<?php
	include "../koneksi/koneksi.php";
	session_start();
	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$user = mysql_real_escape_string($user);
	$pass = mysql_real_escape_string($pass);
	
	if (empty($user) && empty($pass)) {
	header('location:login.php?error=1');
	break;
	} else if (empty($user)) {
	header('location:login.php?error=2');
	break;
	} else if (empty($pass)) {
	header('location:login.php?error=3');
	break;
}
	
	$q =mysql_query("select * from admin where username='$user' and password='$pass'");
	if(mysql_num_rows($q) == 1){
		$row = mysql_fetch_assoc($q);
		$_SESSION['username'] = $row['username'];
		$_SESSION['level'] = $row['level'];
		header('location:home.php');
	}else{
		header('location:login.php?error=4');
	}
?>