<?php

//TEMPLATE CLASS
class TMPL
{

	// FUNCTION MENU
	function showMenu(
	$firstMenu = 'HOME', 
	$secondMenu = 'BUY', 
	$ThirdMenu = 'PROFILE',
	$fourthMenu = 'PENDAFTARAN',
	$fifthMenu ='TOS',
	$sixthMenu = 'HELP',
	$seventhMenu='HUBUNGI KAMI')
	{
		echo "
		<li><a title='Home' href='#'>$firstMenu</a></li>
		<li><a title='Home' href='#'>$secondMenu</a></li>
		<li><a title='Home' href='#'>$ThirdMenu</a></li>
		<li><a title='Home' href='#'>$fourthMenu</a></li>
		<li><a title='Home' href='#'>$fifthMenu</a></li>
		<li><a title='Home' href='#'>$sixthMenu</a></li>
		<li><a title='Home' href='#'>$seventhMenu</a></li>
		";
	}
}
$showMenu = new TMPL();
$showMenu->showMenu()
//OVEWRITE
$showMenu->showMenu('wewe','BUY','PROFILE','PENDAFTARAN','TOS','HELP','HUBUNGI KAMI');



?>