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
<body>
<div class="container">
	<div class="header">
		<div class="mwarp">
			<div class="logo">
			<a href="#">dn-admin</a>
			</div>
		<div class="menu">
			<ul class="nav">
			<li><a title="Home" href="inbox.php">INBOX</a></li>
			<li><a title="Home" href="edit.php">EDIT PROFILE</a></li>
			<li><a title="Home" href="product.php">EDIT PRODUCT</a></li>
			<li><a title="Home" href="help.php">BANTUAN</a></li>
		</ul>
			<!--END mwarp-->
		</div>
	</div>
<div class="admincontrolprofileedit">
		<form action="add.php" method="post" class="pertanyaan" id="pendaftaran">
		<ul>
		</li><li class="">
		<label class="description">Nama Pemilik</label>
		<span><input value="$namaFn" size="14" maxlength="255" class="element text" name="OwnerFn" id="element_5_1">
		<label>First</label></span>
		<span><input value="$namaLn" size="14" maxlength="255" class="element text" name="OwnerLn" id="element_5_2">
		<label>Last</label></span>
		<p id="guide_5" class="guidelines"><small>23</small></p> 
		</li>
		
		<li class="">
		<label class="description">Pengumuman</label>
		<div><textarea class="element textarea medium" name="Introduction">$Pengumuman untuk pembeli ( halaman profile )</textarea></div>
		<p id="guide_3" class="guidelines"><small>23</small></p> 
		</li>

		<li class="">
		<label class="description">Tentang Bisnis Anda </label>
		<div><textarea class="element textarea medium" name="Introduction" id="element_3">$Introduction</textarea></div>
		<p id="guide_3" class="guidelines"><small>$Introduction</small></p> 
		</li>
		
		<li class="">
		<label class="description">Alamat Bisnis Anda </label>
		<div><textarea class="element textarea medium" name="Introduction" id="element_3">$alamat yang disimpan didatabase</textarea></div>
		<p id="guide_3" class="guidelines"><small>$alamat yang disimpan didatabase</small></p> 
		</li>
		
		<li class="">
		<label class="description">Email Anda</label>
		<div><input type="text" value="$emailsaya" maxlength="255" class="element text medium" name="Phone" id="element_4"></div>
		<p id="guide_4" class="guidelines"><small>aw</small></p> 
		</li>	

		<li class="">
		<label class="description">Kontak Anda </label>
		<div><input type="text" value="$Nomertlp" maxlength="255" class="element text medium" name="Phone" id="element_4"></div>
		<p id="guide_4" class="guidelines"><small>$Nomertlp</small></p> 
		</li>		

				<li class="buttons">
				<input type="hidden" value="" name="" >
				<input type="submit" value="Submit" name="submit" class="button_text" id="saveForm">
		</li>
			</ul>
		</form>
		<!--END RIGHT-->
		</div>
</div>
<div class="footer">
		<!--INFORMASI TAMBAHAN-->
</div>

</div>

	
</body>
</html>