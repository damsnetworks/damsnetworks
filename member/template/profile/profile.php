<?php
/*
INFORMATION FOR DEVELOPMENT
include "../app.php";
include $basepath . "inc/PasswordHash.php";
include $basepath . "inc/functions.php";
include $basepath . "inc/adodb5/adodb.inc.php";
@include /member/profile.php
*/
include "pheader.php";
?>
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
                    <!-- sini -->
<?php include "pfooter.php"; ?>