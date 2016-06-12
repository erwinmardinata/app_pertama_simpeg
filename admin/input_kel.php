<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard Admin</title>
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/input_style.css" />
</head>
<body>
	<div id="main">
   	  <div id="header"></div>
        <div id="navigasi">
          <li><a href="home.php">Dashboard</a></li>
          <li><a href="#">Atur Pegawai</a></li>
          <li><a href="input_file.php">Upload Data</a></li>
          <li><a href="logout.php">Logout</a></li>
        </div>
        <div id="kontent">
          <div id="kontent_judul">DATA KELUARGA</div>
          <div id="kontent_isi">
          <?php include "../koneksi/koneksi.php"; ?>
          	<form action="proses_input_kel.php" method="post" class="input_style">
          		<input type="hidden" name="nip" value="<?php echo $_GET['nip']; ?>"/>
            	<label>
                	<span>Nama Keluarga :</span>
                	<input type="text" name="nkel" />
                </label>
                <label>
                	<span>Tgl Kawain :</span>
               	    <input type="text" name="tglkawin" />
                </label>
                <label>
                	<span>Nama Ayah/Ibu :</span>
               	    <input type="text" name="nmortu" />
                </label>
                <label>
                	<span>Keterangan:</span>
               	    <input type="text" name="ket" />
                </label>
                <div class="submit">
                <input type="submit" value="SIMPAN" />
                </div>
            </form>
          </div>
        </div>
        <div class="clear"></div>
      <div id="footer">
        <p>Copyright &copy; by : Erwin Mardinata</p>
      </div>
    </div>
</body>
</html>

