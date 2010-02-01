<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../media/css/base.css" type="text/css" />
	<link rel="stylesheet" href="../media/css/admin.css" type="text/css" />
	<script src="view.js" type="text/javascript"></script>
</head>
<body class="<?php getUserBrowser() ?>">
<div class="container">
	<div class="header">
		<div class="mwarp">
			<div class="logo">
				<a href="#">dn-admin</a>
			</div>
		</div>
	</div>
		
	<div class="warpmemberlogin">
			<div class="huserlogin"><h3>User Login</h3></div>
			<div class="warpformlogin">
			<form method="post" action="index.php" class="theform" name="test">
			<ul>
				<li class=""><label class="description">ID Bisnis </label>
				<div><input type="text" value="" maxlength="255" class="element text big" name="Username" id="element_1"></div>
				<p id="guide_1" class="guidelines"><small>Masukan ID bisnis anda, lihat bagian help untuk bantuan lebih lanjut.</small></p></li>		
	
				<li class="">
				<label class="description">ID Password </label>
				<div><input type="password" value="" maxlength="255" class="element text big" name="Password" id="element_2"></div>
				<p id="guide_2" class="guidelines"><small>Masukan kata kunci anda, usahakan lakukan pengabungan antara text dan angka untuk keamanan lebih.</small></p> 
			
				<li class="buttons">
				<input type="hidden" name="" value="">
				<input type="submit" class="button_text" name="submit" value="OK">
				</li>
			</ul>
			</form>	
			</div>
	</div>
</div>	
</body>
</html>