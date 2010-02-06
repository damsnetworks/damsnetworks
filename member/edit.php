<?php
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";

// Session Start
$adodbsessionstart = new UADODB;
$adodbsessionstart->adodbSessionStart();

$db = ADONewConnection($dbtype);
$db->debug = true;
$db->Connect($dbhost, $dbuser, $dbpwd, $dbname);

// Session Check
loginCheck();

$username = $_SESSION['sUsername'];
$submit	= (isset($_POST['submit'])) ? true : false;


// THIS IS THE DEFAULT or profile page the form is at theme profile.
if ($submit)
      {
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

      // REFRESH
      $query = "SELECT company.cid, company.ownerFn, company.ownerLn, company.companyPhone, company.companyAddress, company.companyEmail, company.companyName, content.announcement, content.introduction FROM company, content WHERE company.username = '".$username."'  AND content.username = company.username";
      $row = $db->GetRow($query);
      }
// jika tidak submit
elseif(!$submit)
    {
      $query = "SELECT company.cid, company.ownerFn, company.ownerLn, company.companyPhone, company.companyAddress, company.companyEmail, company.companyName, content.announcement, content.introduction FROM company, content WHERE company.username = '".$username."'  AND content.username = company.username";
      $row = $db->GetRow($query);
    }

// theme control

$at = isset($_GET['on']) ? $_GET['on'] : null;
switch ($at) {
    case 'profile':
        echo 'awawawa';
        break;

    case 'upgrade':
        echo 'waeawewa';
       break;

    default:
       include $basepath . "member/template/profile/profile.php";
}
?>
