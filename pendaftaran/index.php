<?php
include("../app.php");
include $basepath . "inc/functions.php";

// variable
$submit	= (isset($_POST['submit'])) ? true : false;
$message = '';
$error = array();

if ($submit)
{
	include $basepath . "inc/adodb5/adodb.inc.php";
	include $basepath . "inc/PasswordHash.php";

// Sanitize dan validasi data( sudah di register.php di template dari inputnya
// biar ga kelebihan jumlah varcharnya .

$username       = $_POST['username'];
$password       = $_POST['password'];
$OwnerFn        = $_POST['OwnerFn'];
$OwnerLn        = $_POST['OwnerLn'];
$companyPhone   = $_POST['companyPhone'];
$companyName    = $_POST['companyName'];
$partnership    = $_POST['partnership'];

	$db = ADONewConnection($dbtype);
	$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

	$hash = new PasswordHash(8, FALSE);
	$password = $hash->HashPassword($_POST['password']);

	// required field
	if(empty($_POST['username']))
	{
		$error[] = "Username field wajib diisi";
	}
	if(empty($_POST['password']))
	{
		$error[] = "password wajib diisi";
	}
	if(empty($_POST['partnership']))
	{
		$error[] = "pilihan partner wajib diisi";
	}
    if(empty($_POST['companyName']))
    {
  	    $error[] = "Nama usaha wajib diisi";
    }
	// check username availibility
	$query = "SELECT cid FROM company WHERE username = '".$username."'";
	$checkusername = $db->GetOne($query);
	if($checkusername)
	{
		$error[] = "Sorry, that username is taken. Please go back and try again.";
	}

	if (!sizeof($error))
	{
	    ;
		$data['username'] 		= $username;
		$data['password'] 		= $password;
        $data['companyName']    = $companyName;
		$data['OwnerFn'] 		= $OwnerFn;
		$data['OwnerLn'] 		= $OwnerLn;
		$data['companyPhone'] 	= $companyPhone;
		$data['partnership'] 	= $partnership;

		if($db->AutoExecute('company', $data, 'INSERT'))
		{
			$message = "Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.";
		}
		else
		{
			$message = "<p>Sorry, your registration failed. Please go back and try again.</p>";
		}
	}
}

// THEME CONTROL
if ($message)
{
	include $basepath . "pendaftaran/style/approved/message.php";
}
else
{
	include $basepath . "pendaftaran/style/default/register.php";
}
?>