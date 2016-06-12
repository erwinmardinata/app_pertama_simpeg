<?php
	include "koneksi/koneksi.php";

	$a = $_POST['nip'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$status = $_POST['status'];
	$jk = $_POST['jk'];
	$agama = $_POST['alamat'];
	$telp = $_POST['telp'];
	$jenis_peg = $_POST['jenis_peg'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$photo = $_FILES['photo']['name'];
	$lokasi = $_FILES['photo']['tmp_name'];
	$folder = '../admin/photo/';
	$unggah = $folder.$photo;
	
	move_uploaded_file($lokasi,$unggah);
	$query =mysql_query ("update data_pegawai set nip='$a',
nama='$nama', ttl='$ttl', status='$status', jenis_kelamin='$jk', agama='$agama', telp='$telp', jenis_peg='$jenis_peg', email='$email', alamat='$alamat', photo='$photo' where nip='$a'");
	
	if ($query){
		header('location:profil.php');
	}else{
		header('location:data_pribadi.php?nip='.$a);
	}
?>