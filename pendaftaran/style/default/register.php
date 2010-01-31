<?php
include "header.php";
?>
	
	<div class="warppendaftaranmid">
		<div class="pendaftaranperaturan">
		Prasyarat
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
	
				<form action="index.php" method="post" class="pertanyaan" id="pendaftaran">
				<ul>
	
				<li class=""><label class="description">ID Bisnis </label>
				<div><input type="text" value="" maxlength="60" class="element text medium" name="Username" id="element_1"></div>
				<p id="guide_1" class="guidelines"><small>Masukan ID bisnis anda, lihat bagian help untuk bantuan lebih lanjut.</small></p> 
				</li>		
	
				<li class="">
				<label class="description">ID Password </label>
				<div><input type="password" value="" maxlength="255" class="element text medium" name="Password" id="element_2"></div>
				<p id="guide_2" class="guidelines"><small>Masukan kata kunci anda, usahakan lakukan pengabungan antara text dan angka untuk keamanan lebih.</small></p> 
	
				</li><li class="">
				<label class="description">Nama Pemilik </label>
				<span><input value="" size="8" maxlength="255" class="element text" name="OwnerFn" id="element_5_1">
				<label>First</label></span>
				<span><input value="" size="14" maxlength="255" class="element text" name="OwnerLn" id="element_5_2">
				<label>Last</label></span>
				<p id="guide_5" class="guidelines"><small>Masukan Nama, anda lihat bagian help untuk bantuan lebih lanjut.</small></p> 
				</li>
	
				<li class="">
				<label class="description">Tentang Bisnis Anda </label>
				<div><textarea class="element textarea medium" name="Introduction" id="element_3"></textarea></div>
				<p id="guide_3" class="guidelines"><small>Masukan kata perkenalan bisnis anda, akan kami gunakan pada halaman bisnis anda.</small></p> 
				</li>
	
				<li class="">
				<label class="description">Kontak Anda </label>
				<div><input type="text" value="" maxlength="255" class="element text medium" name="Phone" id="element_4"></div>
				<p id="guide_4" class="guidelines"><small>Masukan nomer telpon bisnis anda, kami akan melakukan konfirmasi melalui nomer ini.</small></p> 
				</li>		
	
				<li class="">
				<label class="description">Memberships </label>	
				<span>
				<input type="radio" value="1" class="element radio" name="Partnership">
				<label class="choice">Bronze Partnership</label>
				<input type="radio" value="2" class="element radio" name="Partnership">
				<label class="choice">Silver Partneship</label>
				<input type="radio" value="3" class="element radio" name="Partnership">
				<label class="choice">Gold Partneship</label>
				</span>
				<p id="guide_6" class="guidelines"><small>Pilih salah satu paket, silahkan ke halaman help untuk bantuan lebih lanjut</small></p> 
				</li>
	
				<li class="buttons">
				<input type="hidden" value="" name="" >
				<input type="submit" value="Submit" name="submit" class="button_text" id="saveForm">
				</li>
				</ul>
			</form>
			</div>
		</div>
	<!-- CLEARING -->


<?php
include "footer.php";
?>