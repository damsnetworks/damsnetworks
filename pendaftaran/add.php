<?php 
include("../inc/db.php");
if(!empty($_POST['Username']) && !empty($_POST['Password']))
{
  $Username = mysql_real_escape_string($_POST['Username']);
  $Password = md5(mysql_real_escape_string($_POST['Password']));
  $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$Username."'");
    if(mysql_num_rows($checkusername) == 1)
     {
      echo "<h1>Error</h1>";
      echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
      $registerquery = mysql_query("INSERT INTO users (Username, OwnerFn, OwnerLn, Password, Partnership) VALUES('$_POST[Username]','$_POST[OwnerFn]','$_POST[OwnerLn]','$_POST[Password]','$_POST[Partnership]')");
      if($registerquery)
        {
          echo "<h1>Success</h1>";
          echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}

  ?>

