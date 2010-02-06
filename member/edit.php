<?php
include "../app.php";
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

// theme control
$at = isset($_GET['on']) ? $_GET['on'] : null;
switch ($at) {

case 'upgrade':
// IF URL ?ON=UPGRADE
    include $basepath . "member/template/profile/upgrade.php";
    break;

case 'theme':
// IF URL ?ON=THEME
    include $basepath . "member/template/profile/theme.php";
    break;

case 'im':
// IF URL ?ON=IM
    include $basepath . "member/template/profile/im.php";
    break;

case 'delete':
// IF URL ?ON=DELETE
    include $basepath . "member/template/profile/delete.php";
    break;

default:
// IF URL ?ON=PROFILE
    $username = $_SESSION['sUsername'];
    $submit	= (isset($_POST['submit'])) ? true : false;
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
        //jika tidak submit
        elseif(!$submit)
        {
          $query = "SELECT company.cid, company.ownerFn, company.ownerLn, company.companyPhone, company.companyAddress, company.companyEmail, company.companyName, content.announcement, content.introduction FROM company, content WHERE company.username = '".$username."'  AND content.username = company.username";
          $row = $db->GetRow($query);
        }
        // theme profile.php
        include $basepath . "member/template/profile/profile.php";
      break;
}
?>
