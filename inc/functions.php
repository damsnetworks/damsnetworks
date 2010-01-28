<?php

/* kumpulan functions yg dibutuhin
lists:

- sanitize field ($_POST, $_GET, $_COOKIE, dll)
- validasi username
- validasi email
- validasi url
- send email

*/

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


// end of file
?>


