<?php
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";

// Session Start
$adodbsessionstart = new UADODB;
$adodbsessionstart->adodbSessionStart();

// Start ADODB
$db = ADONewConnection($dbtype);
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

// JIKA UDAH LOGIN
if(!empty($_SESSION['sLogin']) && !empty($_SESSION['sUsername']))
{

// THEME CONTROL 1
	include $basepath . "member/style/approved/message.php";

}
// JIKA BELUM LOGIN
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = sanitize($_POST['username']);
	$password = sanitize($_POST['password']);

	$query = "SELECT cid, username, password FROM company WHERE username = '".$username."'";
	$row = $db->GetRow($query);

	// Apabila username dan password ditemukan
	if($row)
	{
		// cek password
		$hash = new PasswordHash(8, FALSE);

		if ($hash->CheckPassword($_POST['password'], $row['password']))
		{

            //$username = $row['username']
			$_SESSION['sUsername'] = $row['username'];
			$_SESSION['sLogin'] = 1;
			$_SESSION['sCid'] = $row['cid'];

			// Redirect
			// UNTUK CEK GA ERROR
			echo "<h1>Success</h1>";
			echo "<p>We are now redirecting you to the member area.</p>";
			header('location:index.php');
		}
  		else
		{
			//todo: login attempt
			echo "<center>GATOT1!<br>";
			echo "<a href='index.php'><b>ULANGI LAGI</b></a></center>";
		}
	}

	else
	{
		echo "<center>GATOT2!<br>";
		echo "<a href='index.php'><b>ULANGI LAGI</b></a></center>";
	}

}
else
{

// THEME CONTROL 2
	include $basepath . "member/style/default/login.php";
}

?>