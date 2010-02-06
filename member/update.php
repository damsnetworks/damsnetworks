<?php
include "../app.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";

// Session Start
$adodbsessionstart = new UADODB;
$adodbsessionstart->adodbSessionStart();

// Session Check
loginCheck();

$username = $_SESSION['sUsername'];

// Connect DB
$db = ADONewConnection($dbtype);
$db->debug=1;
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

$t1sql = "SELECT cid, ownerFn, ownerLn, companyPhone, companyAddress, companyEmail, companyName FROM company WHERE username = '".$username."'";
$t2sql = "SELECT announcement, introduction FROM content WHERE username = '".$username."'";

$t1execute = $db->Execute($t1sql);
$t2execute = $db->Execute($t2sql);

$t1update['OwnerFn'] = $_POST['OwnerFn'];
$t1update['OwnerLn'] = $_POST['OwnerLn'];
$t1update['companyName'] = $_POST['companyName'];
$t1update['companyAddress'] = $_POST['companyAddress'];
$t1update['companyEmail'] = $_POST['companyEmail'];
$t1update['companyPhone'] = $_POST['companyPhone'];

$t2update['introduction'] = $_POST['introduction'];
$t2update['announcement'] = $_POST['announcement'];

$t1updateSQL = $db->GetUpdateSQL($t1execute, $t1update);
$t2updateSQL = $db->GetUpdateSQL($t2execute, $t2update);

$db->Execute($t1updateSQL);
$db->Execute($t2updateSQL);
 # Update the record in the database
?>