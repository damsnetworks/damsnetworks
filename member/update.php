<?php 
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";

// Session Start
$adodbsessionstart = new UADODB;
$adodbsessionstart->adodbSessionStart(); 

// Session Check
loginCheck();

$cid = (int) $_SESSION['sCid'];
$db = ADONewConnection($dbtype);
$db->debug=1; 
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);
$sql = "SELECT * FROM company WHERE cid = '".$cid."'";
$rs = $db->Execute($sql);

$dataupdate['OwnerFn'] = $_POST['OwnerFn'];
$dataupdate['OwnerLn'] = $_POST['OwnerLn'];
$dataupdate['pengumuman'] = $_POST['pengumuman'];
$dataupdate['introduction'] = $_POST['introduction'];
$dataupdate['companyAddress'] = $_POST['companyAddress'];
$dataupdate['companyEmail'] = $_POST['companyEmail'];
$dataupdate['companyPhone'] = $_POST['companyPhone'];
$updateSQL = $db->GetUpdateSQL($rs, $dataupdate);
$db->Execute($updateSQL); # Update the record in the database   
?>