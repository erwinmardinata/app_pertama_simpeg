<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard Admin</title>
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/input_style.css" />
<link rel="stylesheet" type="text/css" href="css/table.css" />
</head>
<body>
	<div id="main">
   	  <div id="header"></div>
        <div id="navigasi">
          <li><a href="home.php">Dashboard</a></li>
          <li><a href="input_peg.php">Atur Pegawai</a></li>
          <li><a href="#">Upload Data</a></li>
          <li><a href="logout.php">Logout</a></li>
        </div>
        <div id="kontent">
          <div id="kontent_judul">Input File</div>
          <div id="kontent_isi">
          <h3 align="center">Daftar File</h3>
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
				$query = mysql_query ("select * from upload limit $posisi,$batas");
				$x=1;
			 ?>
          <table align="center" class="tabel">
          	<tr>
          		<th>No.</th>
          		<th>Tgl Upload</th>
          		<th>Judul</th>
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
                    <td><?php echo $list['tgl']; ?></td>
                    <td><?php echo $list['judul']; ?></td>
                    <td><a href="hapus_file.php?id=<?php echo $list['id']; ?>"><img src="../images/hapus.png"/></a></td>
                </tr>
                <?php $x++; 
				} 
			} ?>
          </table>
          <?php
            	$query2=mysql_query("select * from upload");
				$jmldata = mysql_num_rows($query2);
				$jmlhal = ceil($jmldata/$batas);
				
				$file = "home.php";
			?>
            <form method="get" action="input_file.php">
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
          </br>
          </br>
          	<form action="proses_input_file.php" method="post" class="input_style" enctype="multipart/form-data">
            	<label>
                	<span>File :</span><input type="file" name="upfile" />
                </label>
                <div class="submit">
                <input type="submit" value="UPLOAD" name="upload"/>
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
