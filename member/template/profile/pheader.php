<!--
INFORMATION FOR DEVELOPMENT
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";
@include /member/profile.php
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhg/1999/xhtml" xml:lang="en">
<html>
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
			<a href="#">dn-admin</a>
			</div>
		<div class="menu">
			<ul class="nav">
			<?php $showMenu = new TMPL();$showMenu->showMenuMember(); ?>
			</ul>
			<!--END mwarp-->
		</div>
	</div>

<div class="admincontrolprofileedit">
<?php $showAnnouncement = new INFO();$showAnnouncement->what('editprofile'); ?>
					<div class="admincontrolprofileeditleft">
							<div class="adminleditbox">
							<ul>
                                <li class="profilebox sepver"><a href='edit.php'><h3>Profile</h3></a></li>
                                <li class="profilepicedit"><a href='?on=profile'>ProfilePics</a></li>
								<li class="profilebox sepver"><a href='?on=upgrade'>Upgrade</a></li>
								<li class="profilebox sepver"><a href='?on=theme'>Theme</a></li>
								<li class="profilebox sepver"><a href='?on=im'>IM</a></li>
								<li class="profilebox sepver"><a href='?on=delete'>Delete</a></li>
							</ul>
							</div>
					</div>