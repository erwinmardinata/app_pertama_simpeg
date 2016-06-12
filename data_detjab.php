<?php
	include "cek-login.php";
?>
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
       				<?php 
						include "koneksi/koneksi.php";
						$query = mysql_query("select * from det_jab where nip='$_SESSION[nip]'");
						$data = mysql_fetch_array($query);
						
					?>
        <div id="isi">
       
            <h2 align="center">EDIT DETAIL JABATAN</h2>
            	<form action="proses_edit_detjab.php" method="post" class="input_style">
          	<input type="hidden" name="nip" value="<?php echo $data['nip']; ?>"/>
                <label>
                	<span>Jabatan :</span><input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" />
                </label>
                <label>
                	<span>Gaji Pokok :</span><input type="text" name="gapok" value="<?php echo $data['gapok']; ?>" />
                </label>
                <label>
                	<span>Terhitung Mulai :</span><input type="text" name="mulai" value="<?php echo $data['ter_mu']; ?>" />
                </label>
                <div class="submit">
                <input type="submit" value="SIMPAN" />
                </div>
            </form>
            
            </div>       
        <div class="clear"></div>
    <div id="footer">
        <p>Copyright &copy; 2014 | by : Erwin Mardinata</p>
	</div>
</div>
</body>
</html>

