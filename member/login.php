<?php
include "../inc/db.php";
include "../inc/functions.php";
session_start();
// JIKA UDAH LOGIN
	if(!empty($_SESSION['sLogin']) && !empty($_SESSION['sUsername']))
	{
?>
<!-- GA MAU MUNCUL 0,0 -->
	<h1>Member Area</h1>
	<p>Thanks for logging in! You are <b><?=$_SESSION['sUsername']?></p>
	<ul>
	<li><a href="admin.php">Ke Admin</a></li>
	<li><a href="logout.php">logout</a></li>
	</ul>
	
<?php
	}
// JIKA BELUM LOGIN
	elseif(!empty($_POST['Username']) && !empty($_POST['Password']))
{
		$username = sanitize($_POST['Username']);
		$password = sanitize($_POST['Password']);
		$loginCheck = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

	// Apabila username dan password ditemukan
	if(mysql_num_rows($loginCheck) == 1)
	{
	$row = mysql_fetch_array($loginCheck);

	// Set sessionSebuah = Database[Apa] / MASIH ERROR
 	$_SESSION['sUsername'] = $username;
	$_SESSION['sLogin'] = 1;

 	// Redirect
	// UNTUK CEK GA ERROR
	echo "<h1>Success</h1>";
	echo "<p>We are now redirecting you to the member area.</p>";
	echo "<meta http-equiv='refresh' content='=2;login.php' />";
	//header('location:admin.php');
	}
	else{
	 echo "<center>GATOT!<br>";
 	 echo "<a href=login.php><b>ULANGI LAGI</b></a></center>";
		}
	}
else
{
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
	<?print_r($_SESSION);?>
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

   <?php
}
?>