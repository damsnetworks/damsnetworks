<?php 
include "../app.php";
include $basepath . "inc/functions.php";

$adodbsessionstart = new UADODB;
$adodbsessionstart->adodbSessionStart();

session_unset();
session_destroy(); 
//delete from sessions where expireref = '$USER' ???
header('Location: index.php');
?>
