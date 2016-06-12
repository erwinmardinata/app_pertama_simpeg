<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:home.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
	<div class="input_style">
    <h1>LOGIN ADMIN</h1>
     <?php 

			if (!empty($_GET['error'])) {
			if ($_GET['error'] == 1) {
			echo '<h3 align=center>Username dan Password belum diisi!</h3>';
			} else if ($_GET['error'] == 2) {
			echo '<h3 align=center>Username belum diisi!</h3>';
			} else if ($_GET['error'] == 3) {
			echo '<h3 align=center>Password belum diisi!</h3>';
			} else if ($_GET['error'] == 4) {
			echo '<h3 align=center>Username dan Password tidak terdaftar!</h3>';
			}
			}
			?>
    	<form action="otentikasi.php" method="post">
            	<label>
                	<span>USERNAME</span><input type="text" name="username" />
                </label>
                <label>
                	<span>PASSWORD</span><input type="password" name="password" />
                </label>
                <div class="submit">
                <input type="submit" value="LOGIN" name="login"/>
                </div>
            </form>
    </div>
</body>
</html>
