<?php 
include("../app.php");
include('../inc/adodb/adodb.inc.php');

$db = ADONewConnection($dbtype);
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

$submit	= (isset($_POST['submit'])) ? true : false;
$error 	= array(); 

$Username = mysql_real_escape_string($_POST['Username']);
$Password = md5(mysql_real_escape_string($_POST['Password']));

// required field
if(empty($_POST['Username'])
{
	$error[] = "Username field wajib diisi";
}

if(empty($_POST['Password'])
{
	$error[] = "Password wajib diisi";
}

// check username availibility
$query = "SELECT UID FROM users WHERE Username = '".$Username."'";
$checkusername = (int) $db->GetOne($query);
if(!$checkusername)
{
	$error[] = "Sorry, that username is taken. Please go back and try again.";
}

if (!sizeof($error) && $submit)
{

	// gw comment dulu ;)
	//mysql_query("INSERT INTO company (Introduction, Phone) VALUES('$_POST[Introduction]','$_POST[Phone]')");
	
	// todo: validation field
	$data['Username'] 	= $_POST['Username'];
	$data['OwnerFn'] 	= $_POST['OwnerFn'];
	$data['OwnerLn'] 	= $_POST['OwnerLn'];
	$data['Password'] 	= $_POST['Password'];
	
	if($db->AutoExecute('users', $data, 'INSERT'))
	{
		$message = "Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.";
	}
	else
	{
		$message = "<p>Sorry, your registration failed. Please go back and try again.</p>";    
    }         
}

// end of files