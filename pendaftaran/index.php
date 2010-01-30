<?php 
include("../app.php");
include $basepath . "inc/functions.php";

$submit	= (isset($_POST['submit'])) ? true : false;

$message = '';
$error = array();
if ($submit)
{
	include $basepath . "inc/adodb5/adodb.inc.php";
	include $basepath . "inc/PasswordHash.php";
	
	$db = ADONewConnection($dbtype);
	$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);
	
	$username = mysql_real_escape_string($_POST['Username']);

	$hash = new PasswordHash(8, FALSE);
	$password = $hash->HashPassword($_POST['Password']);
	
	// required field
	if(empty($_POST['Username']))
	{
		$error[] = "Username field wajib diisi";
	}

	if(empty($_POST['Password']))
	{
		$error[] = "Password wajib diisi";
	}

	// check username availibility
	$query = "SELECT uid FROM users WHERE username = '".$username."'";
	$checkusername = $db->GetOne($query);
	if($checkusername)
	{
		$error[] = "Sorry, that username is taken. Please go back and try again.";
	}

	if (!sizeof($error))
	{

		// gw comment dulu ;)
		//mysql_query("INSERT INTO company (Introduction, Phone) VALUES('$_POST[Introduction]','$_POST[Phone]')");
		
		// todo: validation field
		$data['username'] 	= $_POST['Username'];
		$data['ownerFn'] 	= $_POST['OwnerFn'];
		$data['ownerLn'] 	= $_POST['OwnerLn'];
		$data['password'] 	= $hash->HashPassword($_POST['Password']);
		
		if($db->AutoExecute('users', $data, 'INSERT'))
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