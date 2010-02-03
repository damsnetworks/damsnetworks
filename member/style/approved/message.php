<?php
include "aheader.php";
?>

	<div class="warpmemberlogin">
		<div class="huserlogin"><h3>Member Area</h3></div>
			<div class="warpformloginappoved">
				<p>Thanks for logging in! You are <?php echo $_SESSION['sUsername']?></p>
                <!-- test session -->
                <p>Thanks for logging in! You are <?php echo $_SESSION['sLogin']?></p>
                <?php
                $s = $_SESSION['sCid'];
                echo $s;
                ?>
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