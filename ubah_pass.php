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
       
            <h2 align="center">UBAH PASSWORD</h2>
            	<form action="proses_ubah_pass.php" method="post" class="input_style">
          	<input type="hidden" name="nip" value="<?php echo $_SESSION['nip']; ?>"/>
                <label>
                	<span>Password Baru :</span><input type="password" name="p_baru"  />
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

