<?php

$host     = "server_name"; 
$user     = "database_user";    
$password = "password"; 
$dbn      = "database_name"; 

mysql_connect($host, $user, $password) or 
  die ("Cannot connect to the database server");
mysql_select_db($dbn) or 
  die ("Cannot connect to the database");

?>

CREATE TABLE `USERS` (
  `UserID` int(25) NOT NULL AUTO_INCREMENT,
  `Username` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Ownerfn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Ownerln` varchar(30) CHARACTER SET utf8 NOT NULL
  `Password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `Phone` int(15) NOT NULL,
  `EmailAddress` varchar(100) CHARACTER SET utf8 NOT NULL,
  `RealAddress` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Partnership` int(11) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(25) NOT NULL AUTO_INCREMENT,
  `Username` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `EmailAddress` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Partnership` int(11) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

