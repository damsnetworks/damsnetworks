<?php
include "header.php";
?>
	
	<div class="warppendaftaranmid">
		<div class="pendaftaranperaturan">
		<?php $showterms = new INFO();$showterms->what('pendaftaranterms'); ?>
		</div>
		<div class="pendaftaranisi">
		
			<?php if (sizeof($error))
			{
			?>
			<div class="pendaftaranerror">
			<div class="iconerror"><p class='corners4px'>Error! nih, coba dicek lagi ya, kalo ada yang tidak dimengerti <a href="#">hubungi</a> kami ya!</p></li>				</div>
			<ul>
			<?php foreach ($error as $errors)
			{ ?>
			<li class="corners4px"><?php echo $errors; ?></li>					
			<?php } ?>
			</div>
			<?php } ?>

			<div class="warpformpendaftaran">
				<h3>pendaftaran</h3>	
	
				<form action="index.php" method="post" class="theform">
				<ul>
	
				<li class=""><label class="description">ID Bisnis </label>
				<div><input type="text" maxlength="60" class="element text medium" name="loginname" value=""></div>
				<p class="guidelines"><small>Masukan ID bisnis anda, lihat bagian help untuk bantuan lebih lanjut.</small></p> 
				</li>		
	
				<li class="">
				<label class="description">ID Password </label>
				<div><input type="password" maxlength="255" class="element text medium" name="password" value=""></div>
				<p class="guidelines"><small>Masukan kata kunci anda, usahakan lakukan pengabungan antara text dan angka untuk keamanan lebih.</small></p> 
				</li>
				
				<li class="">
				<label class="description">Nama Pemilik </label>
				<span><input value="" size="8" maxlength="255" class="element text" name="ownerFn" value="">
				<label>First</label></span>
				<span><input value="" size="14" maxlength="255" class="element text" name="ownerLn" value="">
				<label>Last</label></span>
				<p class="guidelines"><small>Masukan Nama, anda lihat bagian help untuk bantuan lebih lanjut.</small></p> 
				</li>
	
				<li class="">
				<label class="description">Tentang Bisnis Anda </label>
				<div><textarea class="element textarea medium" name="introduction" value=""></textarea></div>
				<p class="guidelines"><small>Masukan kata perkenalan bisnis anda, akan kami gunakan pada halaman bisnis anda.</small></p> 
				</li>
	
				<li class="">
				<label class="description">Kontak Anda </label>
				<div><input type="text" value="" maxlength="255" class="element text medium" name="phone" value=""></div>
				<p class="guidelines"><small>Masukan nomer telpon bisnis anda, kami akan melakukan konfirmasi melalui nomer ini.</small></p> 
				</li>		
	
				<li class="">
				<label class="description">Memberships </label>	
				<span>
				<input type="radio" value="1" class="element radio" name="partnership">
				<label class="choice">Bronze Partnership</label>
				<input type="radio" value="2" class="element radio" name="partnership">
				<label class="choice">Silver Partneship</label>
				<input type="radio" value="3" class="element radio" name="partnership">
				<label class="choice">Gold Partneship</label>
				</span>
				<p class="guidelines"><small>Pilih salah satu paket, silahkan ke halaman help untuk bantuan lebih lanjut</small></p> 
				</li>
	
				<li class="buttons">
				<input type="submit" value="Submit" name="submit" class="button_text">
				</li>
				
				</ul>
			</form>
			</div>
		</div>

<?php
include "footer.php";
?>