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
	function box($howMuch)
	{
	$i = 1;
	while($i <= $howMuch)
		{
		echo "<div class='box'>wew</div>";
		$i++;
		}
	}
}

$showMenu = new TMPL();
$showMenu->box(10)
//OVEWRITE




?>
