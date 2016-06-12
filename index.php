<?php
session_start();
if (!empty($_SESSION['nip'])) {
	header('location:profil.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/body_log.css" />
<title>Simpeg UTS-Sumbawa</title>
</head>
<body>
<div id="main">
    	<div id="header"></div>
        <div id="menu">
        <ul>
        	<li><a href="#">Home</a></li>
        	<li><a href="daftar_peg.php">Daftar Pegawai</a></li>
        </ul>
        </div>
        
    	<?php include "menu_kanan.php"; ?>   
    	<div id="menu_kiri">
       	  <div id="menu_judulkon">APA ITU SIMPEG ?</div>
          <div id="menu_isikon">Simpeg adalah suatu aplikasi yang dimana memudahkan Pegawai yang ada di Universitas Teknologi Sumbawa untuk menginput data-data diri.</div>
          <div id="menu_judulkon">UNTUK SIAPA SIMPEG ?</div>
          <div id="menu_isikon">Simpeg ini ditujukan untuk kalangan pegawai yang berkerja di UNIVERSITAS TEKNOLOGI SUMBAWA</div>
 		</div>
    <div class="clear"></div>
    <div id="footer">
        <p>Copyright &copy; 2014 | by : Erwin Mardinata</p>
	</div>
</div>
</body>
</html>
