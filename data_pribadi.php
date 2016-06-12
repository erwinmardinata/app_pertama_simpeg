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
        <?php include "menu.php";
       				
						include "koneksi/koneksi.php";
						$query = mysql_query("select * from data_pegawai where nip='$_SESSION[nip]'");
						$data = mysql_fetch_array($query);
						
					?>
        <div id="isi">
       
            <h2 align="center">EDIT DATA PRIBADI</h2>
            	<form action="proses_dataprib.php" method="post" class="input_style" enctype="multipart/form-data" >
            	<label>
                	<span>NIP :</span><input type="text" name="nip" value="<?php echo $data['nip']; ?>" />
                </label>
                <label>
                	<span>Nama :</span><input type="text" name="nama" value="<?php echo $data['nama']; ?>" />
                </label>
                <label>
                	<span>TTL :</span><input type="text" name="ttl" value="<?php echo $data['ttl']; ?>" />
                </label>
                <label>
                	<span>Status :</span>
                    	<select name="status">
                        	<option value="">- Status -</option>
                    		<option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                    	</select>
                </label>
                <label>
                	<span>Jenis Kelamin :</span>
                    	<select name="jk">
                        	<option value="">- Jenis Kelamin -</option>
                    		<option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                    	</select>
                </label>
                <label>
                	<span>Agama :</span>
                    	<select name="agama">
                        	<option value="">- Agama -</option>
                    	    <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                    	</select>
                </label>
                <label>
                	<span>No. Telepon :</span><input type="text" name="telp" value="<?php echo $data['telp']; ?>" />
                </label>
                <label>
                	<span>Jenis Pegawai :</span>
                    	<select name="jenis_peg">
                        	<option value="">- Jenis Pegawai -</option>
                    		<option value="Dosen">Dosen</option>
                            <option value="Karyawan">Karyawan</option>
                    	</select>
                </label>
                <label>
                	<span>Email :</span><input type="email" name="email" value="<?php echo $data['email']; ?>" />
                </label>
                <label>
                	<span>Alamat :</span><textarea cols="43px" rows="5px" name="alamat"><?php echo $data['alamat']; ?></textarea>
                </label>
                <label>
                	<span>Photo :</span><input type="file" name="photo" />
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

