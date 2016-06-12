<?php
	include "../koneksi/koneksi.php";
	
	$nip = $_POST['nip'];
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
	$proses = "insert into data_pegawai(nip,nama,ttl,status,jenis_kelamin,agama,telp,jenis_peg,email,alamat,photo) values ('$nip','$nama','$ttl','$status','$jk','$agama','$telp','$jenis_peg','$email','$alamat','$photo')";
	$masukkan = mysql_query($proses);
	if ($masukkan){
		if ($status == "Kawin"){
			header('location:input_kel.php?nip='.$nip);	
		}else{
			header('location:input_detjab.php?nip='.$nip);
		}
		
	}else{
		header('location:input_peg.php?notifi=gagal_bro');
	}
	
?>