<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/daftarpeg.css" />
<link rel="stylesheet" type="text/css" href="css/body_log.css" />
<title>Simpeg UTS-Sumbawa</title>
</head>
<body>
<div id="main">
   	<div id="header"></div>
        <div id="menu">
        	<ul>
        	<li><a href="index.php">Home</a></li>
        	<li><a href="#">Daftar Pegawai</a></li>
            </ul>
        </div>
        <?php include "menu_kanan.php"; ?>    	
    	<div id="menu_kiri">
       	  <div id="menu_judulkon">DAFTAR PEGAWAI</div>
          <div id="menu_isikon">
          <?php 
		  include "koneksi/koneksi.php";
		  
		  $batas = 5;
				if (isset($_GET['halaman']))
				$halaman = $_GET['halaman'];
				if (empty($halaman)){
					$posisi=0;
					$halaman=1;
				}else{
					$posisi = ($halaman-1)*$batas;
				}
				$query = mysql_query ("select * from data_pegawai limit $posisi,$batas");          
			   	if (mysql_num_rows($query)==0){
				echo "<p align=center>No Data</p>";
				}else{
				while($list = mysql_fetch_array($query)){
				 ?>
          		<div id="daftar">
                	<div class="photo"><a href="admin/photo/<?php echo $list['photo']; ?>" ><img src="admin/photo/<?php echo $list['photo']; ?>" width="126" height="141" /></a></div>
                  <div class="nama">
                  		<table class="table">
                        	<tr>
                            	<td>NIP</td><td>:</td><td><?php echo $list['nip']; ?></td>
                            </tr>
                        	<tr>
                            	<td>Nama</td><td>:</td><td><?php echo $list['nama']; ?></td>
                            </tr>
                            <tr>
                            	<td>Status</td><td>:</td><td><?php echo $list['jenis_peg']; ?></td>
                            </tr>
                            <tr>
                            	<td>Alamat</td><td>:</td><td><?php echo $list['alamat']; ?></td>
                            </tr>
                        </table>
                  </div>
                    <div class="clear"></div>
          		</div>
          <?php } }
            	$query2=mysql_query("select * from data_pegawai");
				$jmldata = mysql_num_rows($query2);
				$jmlhal = ceil($jmldata/$batas);
				
				$file = "daftar_peg.php";
			?>
            <form method="get" action="daftar_peg.php"><br/>
            	Halaman : <select name="halaman" onchange="this.form.submit()">
                <?php
                	for($i=1; $i<=$jmlhal; $i++){
						$awal = (($i*$batas)-$batas+1);
						$akhir = $batas*$i;
						if ($i==$halaman)
						echo "<option value=$i selected>$awal s/d $akhir</option>";
						else
						echo "<option value=$i>$awal s/d $akhir <br></option>";
					}
					echo "total jumlah : <b>$jmldata</b> orang";
				?>
                </select>
            </form>
          </div>
 		</div>
    <div class="clear"></div>
    <div id="footer">
        <p>Copyright &copy; 2014 | by : Erwin Mardinata</p>
	</div>
</div>
</body>
</html>