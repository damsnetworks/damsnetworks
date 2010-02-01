<?php
include "aheader.php";
?>

	<div class="warpmemberlogin">
		<div class="huserlogin"><h3>Member Area</h3></div>
			<div class="warpformloginappoved">
				<p>Thanks for logging in! You are <?php echo $_SESSION['sUsername']?></p>
				<ul>
				<li><a href="admin.php">Ke Admin</a></li>
				<li><a href="logout.php">logout</a></li>
				</ul>
			</div>
		</div>
	</div>
			
<?php
include "afooter.php";
?>