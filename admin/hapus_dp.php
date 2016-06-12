<?php 
	include "../koneksi/koneksi.php";
	$nip = $_GET['nip'];
	
	$query1=mysql_query("delete from data_pegawai where nip='$nip'");
	$query2=mysql_query("delete from data_keluarga where nip='$nip'");
	$query3=mysql_query("delete from det_jab where nip='$nip'");
	$query4=mysql_query("delete from biografi where nip='$nip'");
	$query5=mysql_query("delete from data_pend where nip='$nip'");
	$query6=mysql_query("delete from jurnal where nip='$nip'");
	$query7=mysql_query("delete from penelitian where nip='$nip'");
	$query8=mysql_query("delete from pkm where nip='$nip'");
	$query9=mysql_query("delete from pengajaran where nip='$nip'");
	
	if ($query1 && $query2 && $query3 && $query4 && $query5 && $query6 && $query7 && $query8 && $query9){
		header('location:home.php?pesan=sukses');
	}else{
		header('location:home.php?pesan=gagal');
	}
?>
