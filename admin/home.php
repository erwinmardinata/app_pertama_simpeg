<?php
	include "cek-login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard Admin</title>
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/table.css" />
</head>
<body>
	<div id="main">
   	  <div id="header"></div>
        <div id="navigasi">
          <li><a href="#">Dashboard</a></li>
          <li><a href="input_peg.php">Atur Pegawai</a></li>
          <li><a href="input_file.php">Upload Data</a></li>
          <li><a href="logout.php">Logout</a></li>
        </div>
        <div id="kontent">
          <div id="kontent_judul">Daftar Pegawai</div>
          <div id="kontent_isi">
          	<div class="cari">
            <form method="post" action="#" >
            	<input type="text" name="cari" />
                <input type="submit" value="cari" />
            </form>
            </div>
            <?php 
				include "../koneksi/koneksi.php";
				
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
				$x=1;
			 ?>
            <table align="center" class="tabel">
            	<tr>
                	<th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Pegawai</th>
                    <th>Action</th>
                </tr>
               <?php
			   	if(mysql_num_rows($query)==0){?>
                <tr>
                	<td colspan="5">Data Kosong</td>
                </tr>
				<?php }else{
				while($list = mysql_fetch_array($query)){
				 ?>
                <tr>
                	<td><?php echo $x; ?></td>
                    <td><?php echo $list['nip']; ?></td>
                    <td><?php echo $list['nama']; ?></td>
                    <td><?php echo $list['jenis_peg']; ?></td>
                    <td><a href="hapus_dp.php?nip=<?php echo $list['nip']; ?>"><img src="../images/hapus.png"/></a></td>
                </tr>
                <?php $x++; 
				} 
			} ?>
            </table>
            <?php
            	$query2=mysql_query("select * from data_pegawai");
				$jmldata = mysql_num_rows($query2);
				$jmlhal = ceil($jmldata/$batas);
				
				$file = "home.php";
			?>
            <form method="get" action="home.php">
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
        <p>Copyright &copy; by : Erwin Mardinata</p>
      </div>
    </div>
</body>
</html>