<?php

/*
file application 
file ini nantinya selalu diinclude
*/

// base path

if (DIRECTORY_SEPARATOR=='/') {
  $base_path = dirname(__FILE__).'/';
}
else {
  $base_path = str_replace('\\', '/', dirname(__FILE__)).'/'; 
}

// database config
$dbtype		= 'mysql';
$dbhost 	= '';
$dbname 	= '';
$dbuser 	= '';
$dbpwd 		= '';

// general config

// include file



// end of file