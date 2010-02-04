<?php

/*
file application 
file ini nantinya selalu diinclude
*/

// base path

if (DIRECTORY_SEPARATOR=='/') {
  $basepath = dirname(__FILE__).'/';
}
else {
  $basepath = str_replace('\\', '/', dirname(__FILE__)).'/'; 
}

// database config
$dbtype		= 'mysql';
$dbhost 	= 'localhost';
$dbname 	= 'dams';
$dbuser 	= 'root';
$dbpwd 		= '';

// general config

// include file

// end of file