<?php 
include "inc/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Bisnisku - Indonesian best marketplace</title>
	<meta name="description" content="bisnis indonesia profile perusahaan informasi" />	
	<link rel="stylesheet" href="media/css/css-development.css" type="text/css" />

</head>
<body class="<?php getUserBrowser() ?>">
<div class="container">
	<div class="header">
	<div class="mwarp">
		<div class="logo">
			<a href="#">Bisnis</a>
		</div>
		<div class="menu">
			<ul class="nav">
<?php $showMenu = new TMPL();$showMenu->showMenu(); ?>
			</ul>
		</div>
		<!--END mwarp-->
		</div>
	</div>
	<div class="content">
		<!--ISI-->
	</div>
	<div class="footer">
		<!--INFORMASI TAMBAHAN-->
	</div>
</div>
</body>
</html>