<?php
	include "cek-login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/body_peg.css" />
<link rel="stylesheet" type="text/css" href="ckeditor/contents.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js" ></script>
<title>Simpeg UTS-Sumbawa</title>
</head>
<body>
<div id="main">
    	<div id="header"></div>
  <?php include "menu.php"; ?>
        
       				<?php 
						include "koneksi/koneksi.php";
						$query = mysql_query("select * from data_pegawai where nip='$_SESSION[nip]'");
						$query1 = mysql_query("select * from biografi where nip='$_SESSION[nip]'");
						$data = mysql_fetch_array($query);
					?>
        
        <div id="isi">
        <h1>Edit Biografi</h1>
        <table>
        	<tr>
            	<td>NIP/NIDN</td>
                <td>:</td>
                <td><?php echo $data['nip']; ?></td>
            </tr>
            <tr>
            	<td>NAMA</td>
                <td>:</td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
        </table>
        <form method="post" action="proses_biog.php" >
        	<input type="hidden" name="nip" value="<?php echo $data['nip']; ?>" />
            <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>" />
            <?php 
			if (mysql_num_rows ($query1) == 0){ 
			?>
            <input type="hidden" name="status" value="baru" />
        	<textarea id="content"  name="biog" cols="40px" rows="10px"></textarea><br />
            <?php 
			}else{
			$data1 = mysql_fetch_array($query1);
            ?>
            <input type="hidden" name="status" value="editjkjkj" />
            <textarea id="content"  name="biog" cols="40px" rows="10px"><?php echo $data1['biogra']; ?></textarea><br />
            <?php 
			} 
			?>
            <input type="submit" value="Simpan" />
            <script type='text/javascript'>
				var editor = CKEDITOR.replace('content');
				CKFinder.setupCKEditor(editor, 'ckfinder/');
			</script>
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

