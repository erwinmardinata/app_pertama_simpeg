<div id="menu_kanan">
          	<div id="menu_judul">LOGIN PEGAWAI</div>
            <div id="menu_isi">
            <?php 

			if (!empty($_GET['error'])) {
			if ($_GET['error'] == 1) {
			echo '<h5 align=center>Username dan Password belum diisi!</h5>';
			} else if ($_GET['error'] == 2) {
			echo '<h5 align=center>Username belum diisi!</h5>';
			} else if ($_GET['error'] == 3) {
			echo '<h5 align=center>Password belum diisi!</h5>';
			} else if ($_GET['error'] == 4) {
			echo '<h5 align=center>Username dan Password tidak terdaftar!</h5>';
			}
			}
			?>
            	<form method="post" action="otentikasi.php" class="style">
               	  <label> 
                  	<span>NIP :</span><input type="text" name="nip" />
               	  </label>
                  <label>
                    <span>Password :</span><input type="password" name="pass" />
                  </label>
                  <label>
                    <span></span><input type="submit" name="masuk" value="Masuk" />
                  </label>
                </form>
            </div>
            <div id="menu_judul">LINK PARTNER</div>
            <div id="menu_isi">
            	<li><a href="#">uts.sumbawa.ac.id</a></li>
                <li><a href="#">ft.uts.sumbawa.ac.id</a></li>
                <li><a href="#">uts.sumbawa.ac.id</a></li>
                <li><a href="#">ft.uts.sumbawa.ac.id</a></li>
                <li><a href="#">uts.sumbawa.ac.id</a></li>
                <li><a href="#">ft.uts.sumbawa.ac.id</a></li>
            </div>
            <div id="menu_judul">DOWNLOAD</div>
            <div id="menu_isi">
            	<?php
            		include "koneksi/koneksi.php";
            		$query = mysql_query ("select * from upload limit 0,5");
            		while($list = mysql_fetch_array($query)){
            	?>
            	<li><a href="admin/file/<?php echo $list['judul']; ?>"><?php echo $list['judul']; ?></a></li>
            	<?php } ?>
            </div>
   		</div>