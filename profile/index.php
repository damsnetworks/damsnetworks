<?php 
include "../inc/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Bisnisku - Indonesian best marketplace</title>
	<meta name="description" content="bisnis indonesia profile perusahaan informasi" />	
	<link rel="stylesheet" href="../media/css/base.css" type="text/css" />
	<link rel="stylesheet" href="../media/css/admin.css" type="text/css" />
	<script src="view.js" type="text/javascript"></script>
</head>
<body class="<?php getUserBrowser() ?>">
<div class="container">
	<div class="header">
	<div class="mwarp">
		<div class="logo">
			<a href="#">dn</a>
		</div>
		<div class="menu">
			<ul class="nav">
			<?php $showMenu = new TMPL();$showMenu->showMenu(); ?>
			</ul>

		</div>
		<!--END mwarp-->
		</div>
	</div>
<div class="warpprofile">
	<div class="warpprofileabv">
		<div class="companypic">
			{PIC}
		</div>
		<div class="companybadge">
			<div class="imasilvermember">
				{PIC MEMBER SILVER}
			</div>
			<div class="imtrusted">
				{PIC MEMBER VERIVIKASI TRUSTED}
			</div>
			<div class="sold5000">
				SOLD 5000$
			</div>
		</div>
		<div class="companyinformations">
			{INFORMATIONS}
		</div>
	</div>
	<div class="warpprofilebtm">
		<div class="companyproducts">
			<div class="warpproductbox">
				<div class='productbox shadow'>1</div>
				<div class='productbox shadow'>2</div>
				<div class='productbox shadow'>3</div>
				<div class='productbox shadow'>4</div>
				<div class="clear"></div>
			</div>
			<div class="warpproductbox">
				<div class='productbox shadow'>5</div>
				<div class='productbox shadow'>6</div>
				<div class='productbox shadow'>7</div>
				<div class='productbox shadow'>8</div>
				<div class="clear"></div>	
			</div>
		</div>
		</div>
	</div>
</div>

	<div class="footer">
		<!--INFORMASI TAMBAHAN-->
</div>
</body>
</html>