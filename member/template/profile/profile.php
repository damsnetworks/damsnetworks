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
							<div class="hedit">
							<h3>Profile</h3>
							</div>
							<div class="adminleditbox">
							<ul>
								<li class="profilepicedit">ProfilePics</li>
								<li class="profileupgrade sepver">Upgrade</li>
								<li class="profiletema sepver">Theme</li>
								<li class="profileIM sepver">IM</li>
								<li class="profiledelete sepver">Delete</li>
							</ul>
							</div>
					</div>

					<div class="admincontrolprofileeditright">
					<form action="edit.php" method="post" class="theform">
						<ul>

                        <li class="">
						<label class="description">Nama Usaha</label>
						<div><input type="text" value="<?php echo $row['companyName']; ?>" maxlength="255" class="element text medium" name="companyName"></div>
						<p class="guidelines"><small>aw</small></p>
						</li>

						<li class="">
						<label class="description">Nama Pemilik</label>
						<span><input value="<?php echo $row['ownerFn']; ?>" size="20" maxlength="255" class="element text" name="OwnerFn">
						<label>First</label></span>
						<span><input value="<?php echo $row['ownerLn']; ?>" size="30" maxlength="255" class="element text" name="OwnerLn">
						<label>Last</label></span>
						<p class="guidelines"><small>23</small></p>
						</li>

						<li class="">
						<label class="description">Pengumuman</label>
						<div><textarea class="element textarea medium" name="announcement"><?php echo $row['announcement']; ?></textarea></div>
						<p class="guidelines"><small>23</small></p>
						</li>


						<li class="">
						<label class="description">Tentang Bisnis Anda</label>
						<div><textarea class="element textarea medium" name="introduction"><?php echo $row['introduction']; ?></textarea></div>
						<p class="guidelines"><small>23</small></p>
						</li>

						<li class="">
						<label class="description">Alamat Bisnis Anda </label>
						<div><textarea class="element textarea medium" name="companyAddress"><?php echo $row['companyAddress']; ?></textarea></div>
						<p class="guidelines"><small>$alamat yang disimpan didatabase</small></p>
						</li>

						<li class="">
						<label class="description">Email Anda</label>
						<div><input type="text" value="<?php echo $row['companyEmail']; ?>" maxlength="255" class="element text medium" name="companyEmail"></div>
						<p class="guidelines"><small>aw</small></p>
						</li>

						<li class="">
						<label class="description">Kontak Anda </label>
						<div><input type="text" value="<?php echo $row['companyPhone']; ?>" maxlength="255" class="element text medium" name="companyPhone"></div>
						<p class="guidelines"><small>deskripsi tentang telphon</small></p>
						</li>

								<li class="buttons">
								<input type="hidden" value="" name="" >
								<input type="submit" value="Edit Profile" name="submit" class="button_text">
						</li>
							</ul>
						</form>
					</div>
					<div class="clear"></div>
		<!--END RIGHT-->
		</div>
</div>
<div class="footer">
		<!--INFORMASI TAMBAHAN-->
</div>

</div>


</body>
</html>