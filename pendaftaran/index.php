<?php 
include("../app.php");
include $basepath . "inc/functions.php";

// variable
//todo: validate field
$submit	= (isset($_POST['submit'])) ? true : false;

$message = '';
$error = array();

if ($submit)
{
	include $basepath . "inc/adodb5/adodb.inc.php";
	include $basepath . "inc/PasswordHash.php";
	
	$loginname 		= $_POST['loginname'];
	$ownerFn 		= $_POST['ownerFn'];
	$ownerLn 		= $_POST['ownerLn'];
	$introduction 	= $_POST['introduction'];
	$companyPhone	= $_POST['phone'];
	$partnership 	= $_POST['partnership'];
	
	$db = ADONewConnection($dbtype);
	$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);
	
	$hash = new PasswordHash(8, FALSE);
	$password = $hash->HashPassword($_POST['password']);
	
	// required field
	if(empty($_POST['loginname']))
	{
		$error[] = "Username field wajib diisi";
	}
	if(empty($_POST['password']))
	{
		$error[] = "Password wajib diisi";
	}
	if(empty($_POST['partnership']))
	{
		$error[] = "pilihan partner wajib diisi";
	}

	// check username availibility
	$query = "SELECT cid FROM company WHERE loginname = '".$loginname."'";
	$checkloginname = $db->GetOne($query);
	if($checkloginname)
	{
		$error[] = "Sorry, that loginname is taken. Please go back and try again.";
	}

	if (!sizeof($error))
	{
		$data['loginname'] 		= $loginname;
		$data['password'] 		= $password;
		$data['ownerFn'] 		= $ownerFn;
		$data['ownerLn'] 		= $ownerLn;
		$data['introduction'] 	= $introduction;
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