<?php
session_start();
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";


$db = ADONewConnection($dbtype);
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

// JIKA UDAH LOGIN
if(!empty($_SESSION['sLogin']) && !empty($_SESSION['sUsername']))
{

// THEME CONTROL 1
	include $basepath . "member/style/approved/message.php";
	
}
// JIKA BELUM LOGIN
elseif(!empty($_POST['Username']) && !empty($_POST['Password']))
{
	$username = sanitize($_POST['Username']);
	$password = sanitize($_POST['Password']);
	 
	$query = "SELECT uid, username, password FROM users WHERE username = '".$username."'";
	$row = $db->GetRow($query);

	// Apabila username dan password ditemukan
	if($row)
	{
		// cek password
		$hash = new PasswordHash(8, FALSE);
		
		if ($hash->CheckPassword($_POST['Password'], $row['password']))
		{

			$_SESSION['sUsername'] = $username;
			$_SESSION['sLogin'] = 1;

			// Redirect
			// UNTUK CEK GA ERROR
			echo "<h1>Success</h1>";
			echo "<p>We are now redirecting you to the member area.</p>";
			header('location:index.php');
		}
  		else
		{
			//todo: login attempt
			echo "<center>GATOT!<br>";
			echo "<a href='index.php'><b>ULANGI LAGI</b></a></center>";
		}  
	}
	
	else
	{
		echo "<center>GATOT!<br>";
		echo "<a href='index.php'><b>ULANGI LAGI</b></a></center>";
	}
	
}
else
{

// THEME CONTROL 2
	include $basepath . "member/style/default/login.php";
}


