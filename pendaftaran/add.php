<?php
// INC  
include('../app.php');
include('../inc/functions.php');
include('../inc/adodb/adodb.inc.php');
include('../inc/PasswordHash.php.php');

// MAKE ADO DB CONNECTIONS
$db = ADONewConnection($dbtype);
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

$submit	= (isset($_POST['submit'])) ? true : false;
$error 	= array(); 

$Username = sanitize($_POST['Username']);

// HASHING PASSWORD
$hash = new PasswordHash(8, FALSE);
$Password = $hash->HashPassword($_POST['Password']));

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
	$data['Password'] 	= $_POST['Password'];
	$data['partnership']= $_POST['partnership'];
	
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