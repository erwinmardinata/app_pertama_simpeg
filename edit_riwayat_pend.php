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
               	        
        <div id="isi">
        <h2 align="center">DATA RIWAYAT PENDIDIKAN</h2><br />
        	<form action="proses_pend.php" method="post" class="input_style">
            <input type="hidden" name="nip" value="<?php echo $_SESSION['nip']; ?>" />
                <label>
                	<span>Jenjang :</span>
                    	<select name="jenjang">
                        	<option value="">- Jenjang -</option>
                    		<option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                    	</select>
                </label>
                <label>
                	<span>Nama Sekolah :</span><input type="text" name="sekolah" />
                </label>
                <label>
                	<span>No. ijazah :</span><input type="text" name="nmrijasa" />
                </label>
                <label>
                	<span>Tahun Masuk :</span>
                    	<select name="tm">
                        	<option value="">- Tahun Masuk -</option>
                    		<?php for($x=1990; $x<=2015; $x++) {
								echo "<option value='$x'>$x</option>";
								}
							?>
                    	</select>
                </label>
                <label>
                	<span>Tahun Lulus :</span>
                    	<select name="tl">
                        	<option value="">- Tahun Lulus -</option>
                    		<?php for($y=1990; $y<=2020; $y++) {
								echo "<option value='$y'>$y</option>";
								}
							?>
                    	</select>
                </label>
                <label>
                	<span>Fakultas :</span><input type="text" name="fak" />
                </label>
                <label>
                	<span>Jurusan :</span><input type="text" name="jur" />
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

