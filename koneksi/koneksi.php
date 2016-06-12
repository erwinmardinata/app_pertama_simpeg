<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "pegawai";
	$kon = mysql_connect($host,$user,$pass);
	$proses = mysql_select_db($db,$kon);
?>