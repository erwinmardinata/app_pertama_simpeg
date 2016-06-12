<?php
	include "cek-login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/body.css" />
<link rel="stylesheet" type="text/css" href="css/body_peg.css" />
<script type="text/javascript" src="css/jquery.min.js" ></script>
<script type="text/javascript" src="css/jquery-ui.js" ></script>
<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
<title>Simpeg UTS-Sumbawa</title>
</head>
<body>
<div id="main">
    	<div id="header"></div>
        <?php include "menu.php"; 
       				
						include "koneksi/koneksi.php";
						$query1 = mysql_query("select * from data_pegawai where nip='$_SESSION[nip]'");
						$query2 = mysql_query("select * from biografi where nip='$_SESSION[nip]'");
						$query3 = mysql_query("select * from data_pend where nip='$_SESSION[nip]'");
						$query4 = mysql_query("select * from jurnal where nip='$_SESSION[nip]'");
						$query5 = mysql_query("select * from penelitian where nip='$_SESSION[nip]'");
						$query6 = mysql_query("select * from pkm where nip='$_SESSION[nip]'");
						$query7 = mysql_query("select * from pengajaran where nip='$_SESSION[nip]'");
						
						$data = mysql_fetch_array($query1);
					?>
        
        <div id="isi">
        	<div class="photo"><a href="admin/photo/<?php echo $data['photo']; ?>"><img src="admin/photo/<?php echo $data['photo']; ?>" width="200" height="223" /></a></div>
            <div class="id">
            	<table class="table">
                	<tr>
                    	<td>NIP/NIDN</td><td>:</td><td><?php echo $data['nip']; ?></td>
                    </tr>
                    <tr>
                    	<td>NAMA</td><td>:</td><td><?php echo $data['nama']; ?></td>
                    </tr>
                    <tr>
                    	<td>Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $data['ttl']; ?></td>
                    </tr>
                    <tr>
                    	<td>Jenis Kelamin</td><td>:</td><td><?php echo $data['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                    	<td>Jabatan</td><td>:</td><td><?php echo $data['jenis_peg']; ?></td>
                    </tr>
                    <tr>
                    	<td>Email</td><td>:</td><td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                    	<td>Alamat</td><td>:</td><td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                    	<td></td><td></td><td></td>
                    </tr>
                </table>
            </div>
            <div class="clear"></div>
        </div>
        
        <div id="isi">
        <div id="accordion">
        	<div class="navigasi">Biografi</div>
            <div class="navigasi-isi">
            	<?php if(mysql_num_rows($query2)==0){ ?>
            	<font style="font-weight:bold; font-size:14px;"><p align="center">data tidak ada</p></font>
                <?php }else{ ?>
                <font style="font-weight:bold; font-size:14px;">
                <?php
					$data = mysql_fetch_array($query2);
					echo $a=nl2br(stripslashes($data['biogra']));
				}
				?>
                </font>
            </div>
            
            <div class="navigasi">Riwayat Pendidikan</div>
            <div class="navigasi-isi">
            	<table class="tabel" border="1px">
                	<tr>
                    	<th>no.</th>
                        <th>Nama Sekolah</th>
                        <th>Jenjang</th>
                        <th>Program Studi</th>
                        <th>Tahun Lulus</th>
                        <th>Action</th>
                    </tr>
                    <?php if(mysql_num_rows($query3)==0){ ?>
            		<tr>
                    	<td colspan="6" align="center">No Data</td>
                    </tr>
                	<?php }else{
					$x=1;
					while ($data = mysql_fetch_array($query3)){
					?>
                    <tr>
                    	<td><?php echo $x; ?></td>
                        <td><?php echo $data['nama_sekolah']; ?></td>
                        <td><?php echo $data['jenjang']; ?></td>
                        <td><?php echo $data['jurusan']; ?></td>
                        <td><?php echo $data['t_lulus']; ?></td>
                        <td><a href="edit_riwayat_pendup.php?id=<?php echo $data['id']?>"><img src="images/update.png"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="hapus_pend.php?id=<?php echo $data['id']; ?>"><img src="images/hapus.png"/></a></td>
                    </tr>
                    <?php $x++; 
						}
					} ?>
                </table>
                <a href="edit_riwayat_pend.php">Tambah</a>
            </div>
            
            <div class="navigasi">Journal</div>
            <div class="navigasi-isi">
            	<table class="tabel" border="1px">
                	<tr>
                    	<th>no.</th>
                        <th>Judul</th>
                        <th>Tanggal Publikasi</th>
                        <th>Tempat</th>
                        <th>Peran</th>
                        <th>Action</th>
                    </tr>
                    <?php if(mysql_num_rows($query4)==0){ ?>
            		<tr>
                    	<td colspan="6" align="center">No Data</td>
                    </tr>
                	<?php }else{
					$x=1;
					while ($data = mysql_fetch_array($query4)){
					?>
                    <tr>
                    	<td><?php echo $x; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['tgl_publikasi']; ?></td>
                        <td><?php echo $data['tempat']; ?></td>
                        <td><?php echo $data['peran']; ?></td>
                        <td><a href="edit_jurnal.php?id=<?php echo $data['id']?>"><img src="images/update.png"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="proses_hapus_jur.php?id=<?php echo $data['id']; ?>"><img src="images/hapus.png"/></a></td>
                    </tr>
                    <?php $x++; 
						}
					} ?>
                </table>
                <a href="tambah_jurnal.php">Tambah</a>
            </div>
            
            <div class="navigasi">Penelitian</div>
            <div class="navigasi-isi">
            	<table class="tabel" border="1px">
                	<tr>
                    	<th>no.</th>
                        <th>Judul</th>
                        <th>Tanggal Publikasi</th>
                        <th>Tempat</th>
                        <th>Peran</th>
                        <th>Action</th>
                    </tr>
                     <?php if(mysql_num_rows($query5)==0){ ?>
            		<tr>
                    	<td colspan="6" align="center">No Data</td>
                    </tr>
                	<?php }else{
					$x=1;
					while ($data = mysql_fetch_array($query5)){
					?>
                    <tr>
                    	<td><?php echo $x; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['tgl_publikasi']; ?></td>
                        <td><?php echo $data['tempat']; ?></td>
                        <td><?php echo $data['peran']; ?></td>
                        <td><a href="edit_penelitian.php?id=<?php echo $data['id']?>"><img src="images/update.png"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="proses_hapus_penel.php?id=<?php echo $data['id']; ?>"><img src="images/hapus.png"/></a></td>
                    </tr>
                    <?php $x++; 
						}
					} ?>
                </table>
                <a href="tambah_penelitian.php">Tambah</a>
            </div>
            
            <div class="navigasi">Pengabdian Kepada Masyarakat</div>
            <div class="navigasi-isi">
            	<table class="tabel" border="1px">
                	<tr>
                    	<th>no.</th>
                        <th>Judul</th>
                        <th>Tanggal Publikasi</th>
                        <th>Tempat</th>
                        <th>Peran</th>
                        <th>Action</th>
                    </tr>
                    <?php if(mysql_num_rows($query6)==0){ ?>
            		<tr>
                    	<td colspan="6" align="center">No Data</td>
                    </tr>
                	<?php }else{
					$x=1;
					while ($data = mysql_fetch_array($query6)){
					?>
                    <tr>
                    	<td><?php echo $x; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['tgl_publikasi']; ?></td>
                        <td><?php echo $data['tempat']; ?></td>
                        <td><?php echo $data['peran']; ?></td>
                        <td><a href="edit_pkm.php?id=<?php echo $data['id']?>"><img src="images/update.png"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="proses_hapus_pkm.php?id=<?php echo $data['id']; ?>"><img src="images/hapus.png"/></a></td>
                    </tr>
                    <?php $x++; 
						}
					} ?>
                </table>
                <a href="tambah_pkm.php">Tambah</a>
            </div>
            
            <div class="navigasi">Pengajaran</div>
            <div class="navigasi-isi">
            	<table class="tabel" border="1px">
                	<tr>
                    	<th>no.</th>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Action</th>
                    </tr>
                    <?php if(mysql_num_rows($query7)==0){ ?>
            		<tr>
                    	<td colspan="8" align="center">No Data</td>
                    </tr>
                	<?php }else{
					$x=1;
					while ($data = mysql_fetch_array($query7)){
					?>
                    <tr>
                    	<td><?php echo $x; ?></td>
                        <td><?php echo $data['kode_mk']; ?></td>
                        <td><?php echo $data['nama_mk']; ?></td>
                        <td><?php echo $data['sks']; ?></td>
                        <td><?php echo $data['semester']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['hari']; ?></td>
                        <td><a href="edit_pengajaran.php?id=<?php echo $data['id']?>"><img src="images/update.png"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="proses_hapus_pengajaran.php?id=<?php echo $data['id']; ?>"><img src="images/hapus.png"/></a></td>
                    </tr>
                    <?php $x++; 
						}
					} ?>
                </table>
                <a href="tambah_pengajaran.php">Tambah</a>
            </div>
        </div>
        </div>
        
        <div class="clear"></div>
    <div id="footer">
        <p>Copyright &copy; 2014 | by : Erwin Mardinata</p>
	</div>
</div>
</body>
</html>

