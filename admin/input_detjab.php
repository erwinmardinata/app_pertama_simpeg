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
          <div id="kontent_judul">DETAIL JABATAN</div>
          <div id="kontent_isi">
          <?php include "../koneksi/koneksi.php"; ?>
          	<form action="proses_input_detjab.php" method="post" class="input_style">
          	<input type="hidden" name="nip" value="<?php echo $_GET['nip']; ?>"/>
                <label>
                	<span>Jabatan :</span><input type="text" name="jabatan" />
                </label>
                <label>
                	<span>Gaji Pokok :</span><input type="text" name="gapok" />
                </label>
                <label>
                	<span>Terhitung Mulai :</span><input type="text" name="mulai" />
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