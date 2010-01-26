<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "project-10";
$connectdb = mysql_connect("$server","$user","$pass") or die("<p>gatot!, dengan server<p>");
mysql_select_db("$db") or die("<p>gatot!, dengan db<p>");
?>