<?php

/* kumpulan functions yg dibutuhin
lists:

- sanitize field ($_POST, $_GET, $_COOKIE, dll)
- validasi username
- validasi email
- validasi url
- send email

*/

//TEMPLATE CLASS
class TMPL
{

	// FUNCTION MENU
	function showMenu(
	$firstMenu = 'HOME', 
	$secondMenu = 'BUY', 
	$ThirdMenu = 'PROFILE',
	$fourthMenu = 'TOS',
	$fifthMenu ='HELP',
	$sixthMenu = 'HUBUNGI KAMI')
		{
			echo "
			<li><a title='Home' href='#'>$firstMenu</a></li>
			<li><a title='Home' href='#'>$secondMenu</a></li>
			<li><a title='Home' href='#'>$ThirdMenu</a></li>
			<li><a title='Home' href='#'>$fourthMenu</a></li>
			<li><a title='Home' href='#'>$fifthMenu</a></li>
			<li><a title='Home' href='#'>$sixthMenu</a></li>
			";
		}
	// FUNCTION MENU IN MEMBERS
	function showMenuMember(
	$firstMenu = 'INBOX', 
	$secondMenu = 'EDIT PROFILE', 
	$ThirdMenu = 'EDIT PRODUCT',
	$fourthMenu = 'BANTUAN')
		{
			echo "
			<li><a title='Home' href='inbox.php'>$firstMenu</a></li>
			<li><a title='Home' href='edit.php'>$secondMenu</a></li>
			<li><a title='Home' href='product.php'>$ThirdMenu</a></li>
			<li><a title='Home' href='help.php'>$fourthMenu</a></li>
			";
		}
	// FUNCTION BOX(JUMLAH)
	function showBox($howMuch)
	{
	$i = 1;
	while($i <= $howMuch)
		{
		echo "<div class='partnerandwhybox shadow'></div>";
		$i++;
		}
	}
}


// FUNGSI SANITIZE
function sanitize($data)
{
// remove whitespaces (not a must though)
	$data = trim($data); 

	// apply stripslashes if magic_quotes_gpc is enabled
	if(get_magic_quotes_gpc())
		{
			$data = stripslashes($data);
		}

		// a mySQL connection is required before using this function
		$data = mysql_real_escape_string($data);

		return $data;
}
// FUNGSI USER BROWSER NANTI DITARO DI BODY SETIAP HALAMAN BIAR TERATUR CSSNYA
function getUserBrowser()
{
	$uBrowser = $_SERVER['HTTP_USER_AGENT'];

	if(preg_match('/MSIE/i',$uBrowser))
	{
		$sBrowser = "ie";
	}
	elseif(preg_match('/Firefox/i',$uBrowser))
	{
		$sBrowser = "firefox";
	}
	// Chrome beta pake safari jadi gw taro diatas
	elseif(preg_match('/Chrome/i',$uBrowser))
	{
		$sBrowser = "chrome";
	}
	elseif(preg_match('/Safari/i',$uBrowser))
	{
		$sBrowser = "safari";
	}
	elseif(preg_match('/Flock/i',$uBrowser))
	{
		$sBrowser = "flock";
	}
	elseif(preg_match('/Opera/i',$uBrowser))
	{
		$sBrowser = "opera";
	}
	echo $sBrowser;
} 
?>


