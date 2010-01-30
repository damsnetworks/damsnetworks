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
<div class="admincontrolutama">
	<div class="adminpengumuman">
	<h3>Pengumuman!</h3>
	<p>Admin berkata, saya adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus lorem semper neque viverra at vulputate enim placerat.
	In ut enim urna. Pellentesque feugiat dapibus posuere.Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p>
	</div>
	<div class="adminprivate">
	<h3>Segera hubungi billing</h3>
	<p>Admin berkata, Account bapak $anda akan segera habis. Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p>
	</div>
	<div class="adminnews">
	<h3>Apa yang terjadi?</h3>	
		<div class="adminnewsright">	
			<div class="box">
			Penawaran	:	<span class="penjelasan">0</span>
			</div>
			<div class="box">
			Inbox		:	<span class="penjelasan">3*</span>
			</div>
		</div>
		<div class="adminnewsleft">
			<div class="box">
			Product		:	<span class="penjelasan">12</span>
			</div>
			<div class="box">
			Masa aktif	:	<span class="penjelasan">2 hari</span>
			</div>
			<div class="box">
			Masa habis	:	<span class="penjelasan">12 - January - 2010</span>
		</div>
		</div>
	</div>
</div>
<div class="footer">
		<!--INFORMASI TAMBAHAN-->
</div>

</div>

	
</body>
</html>