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
          <div id="kontent_judul">DATA PEGAWAI</div>
          <div id="kontent_isi">
          	<form action="proses_input_peg.php" method="post" class="input_style" enctype="multipart/form-data" >
            	<label>
                	<span>NIP :</span><input type="text" name="nip" />
                </label>
                <label>
                	<span>Nama :</span><input type="text" name="nama" />
                </label>
                <label>
                	<span>TTL :</span><input type="text" name="ttl" />
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
                	<span>No. Telepon :</span><input type="text" name="telp" />
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
                	<span>Email :</span><input type="email" name="email" />
                </label>
                <label>
                	<span>Alamat :</span><textarea cols="43px" rows="5px" name="alamat"></textarea>
                </label>
                <label>
                	<span>Photo :</span><input type="file" name="photo" />
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
