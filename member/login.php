<?php
include "../inc/db.php";
include "../inc/functions.php";
// JIKA BELUM LOGIN
	if(!empty($_POST['Username']) && !empty($_POST['Password']))
{
		$username = sanitize($_POST['Username']);
		$password = sanitize($_POST['Password']);
		$loginCheck = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

	// Apabila username dan password ditemukan
	if(mysql_num_rows($loginCheck) == 1)
	{
	$r = mysql_fetch_array($loginCheck);
  	session_start();
 	session_register("sUsername");
 	session_register("sLogin");
 	session_register("sPartnership");
	// Set sessionSebuah = Database[Apa] / MASIH ERROR
 	$_SESSION['sUsername'] = $username;
	$_SESSION['sLogin'] = 1;
 	$_SESSION['sPartnership']= $r[Partnership];
 	// Redirect
	// UNTUK CEK GA ERROR
	//echo "<meta http-equiv='refresh' content='=2;index.php' />";
	header('location:admin.php');
	}
else{
  echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  echo "<center>Login gagal! username & password tidak benar<br>";
  echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../media/css/base.css" type="text/css" />
	<link rel="stylesheet" href="../media/css/admin.css" type="text/css" />
	<script src="view.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="mwarp">
			<div class="logo">
			<a href="#">dn-admin</a>
			</div>

	</div>
<div class="loginbox">
<h3>User Login</h3>
<form method="post" action="login.php" id="test" name="test">
		<ul>
		<li class=""><label class="description">ID Bisnis </label>
		<div><input type="text" value="" maxlength="255" class="element text big" name="Username" id="element_1"></div>
		<p id="guide_1" class="guidelines"><small>Masukan ID bisnis anda, lihat bagian help untuk bantuan lebih lanjut.</small></p></li>		
		
		<li class="">
		<label class="description">ID Password </label>
		<div><input type="password" value="" maxlength="255" class="element text big" name="Password" id="element_2"></div>
		<p id="guide_2" class="guidelines"><small>Masukan kata kunci anda, usahakan lakukan pengabungan antara text dan angka untuk keamanan lebih.</small></p> 
		</ul>
		
		<li class="buttons">
				<input type="hidden" name="" value="">
				<input type="submit" class="button_text" name="submit" value="OK">
		</li>
</form>	
</div>
</div>
</body>
</html>