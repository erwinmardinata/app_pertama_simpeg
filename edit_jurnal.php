<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/body_peg.css" />
<link rel="stylesheet" type="text/css" href="admin/css/input_style.css" />
<title>Simpeg UTS-Sumbawa</title>
</head>
<body>
<div id="main">
    	<div id="header"></div>
  <?php include "menu.php"; ?>      	        
        <div id="isi">
        <h2 align="center">EDIT JOURNAL</h2>
        <br />
        <?php 
			include "koneksi/koneksi.php"; 
			$id = $_GET['id'];
			$query = mysql_query("select * from jurnal where id = '$id'");
			$data = mysql_fetch_array($query);
		?>
        	<form action="proses_edit_jur.php" method="post" class="input_style">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                <label>
                <span>Judul</span><input type="text" name="judul" value="<?php echo $data['judul']; ?>" />
                </label>
                <label>
                <span>Tanggal Publikasi</span><input type="text" name="tgl_pub" value="<?php echo $data['tgl_publikasi']; ?>" />
                </label>
                <label>
                <span>Tempat</span><input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" />
                </label>
                <label>
                <span>Peran</span><input type="text" name="peran" value="<?php echo $data['peran']; ?>" />
                </label>
                <div class="submit">
                <input type="submit" value="SIMPAN" />
                <input type="reset" value="RESET" />
                </div>
            </form>
          <div class="clear"></div>
 		</div>
        <div class="clear"></div>
    <div id="footer">
        <p>Copyright &copy; 2014 | by : Erwin Mardinata</p>
	</div>
</div>
</body>
</html>

