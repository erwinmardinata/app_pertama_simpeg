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
						$query = mysql_query("select * from data_keluarga where nip='$_SESSION[nip]'");
						$data = mysql_fetch_array($query);
						
					?>
        <div id="isi">
       
            <h2 align="center">EDIT DATA KELUARGA</h2>
            	<form action="proses_edit_kel.php" method="post" class="input_style">
          		<input type="hidden" name="nip" value="<?php echo $_SESSION['nip']; ?>"/>
            	<label>
                	<span>Nama Keluarga :</span>
                	<input type="text" name="nkel" value="<?php echo $data['nama_kel']; ?>" />
                </label>
                <label>
                	<span>Tgl Kawain :</span>
               	    <input type="text" name="tglkawin" value="<?php echo $data['tgl_kawin']; ?>" />
                </label>
                <label>
                	<span>Nama Ayah/Ibu :</span>
               	    <input type="text" name="nmortu" value="<?php echo $data['nama_ortu']; ?>" />
                </label>
                <label>
                	<span>Keterangan:</span>
               	    <input type="text" name="ket" value="<?php echo $data['keterangan']; ?>" />
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

