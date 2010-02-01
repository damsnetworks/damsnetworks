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
</head>
<body  class="<?php getUserBrowser() ?>">
	<div class="container">
		<div class="header">
			<div class="mwarp">
				<div class="logo">
					<a href="#">dn-admin</a>
				</div>
				<div class="menu">
					<ul class="nav">
					<?php $showMenu = new TMPL();$showMenu->showMenuMember(); ?>
					</ul>
					<!--END mwarp-->
				</div>
			</div>	
		</div>
			<div class="admincontrolutama"><?php $showAnnouncement = new INFO();$showAnnouncement->what('editprofile'); ?>
			
			<div class="admincontrolprofileeditleft">
					<ul>
						<li class="producttambah">add product</li>
						<li class="productlist sepver">list product</li>
						<li class="productedit sepver">edit product</li>
						<li class="productdelete sepver">deleate product</li>
					</ul>
				</div>
				<div class="admincontrolprofileeditright"></div>
				<div class="clear"></div>
			
			
			</div>
				

	<div class="footer"><!--INFORMASI TAMBAHAN--></div>		
	</div>
</div>
</body>
</html>