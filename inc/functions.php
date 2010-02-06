<?php
include_once "../app.php";
/* kumpulan functions yg dibutuhin
lists:
- validasi username
- validasi email
- validasi url
- send email
*/

/*
Class UADODB(unite adodb)
Class ini digunakan untuk mempermudah integrasi antara adodb
= todo =
= lists =
- adodbsessionstart
*/
function loginCheck()
{
	if (!isset($_SESSION["sCid"]))
	{
		echo 'anda harus login';
		die();
	}

}

class UADODB
{
	function adodbSessionStart()
	{
		global $basepath,$dbtype, $dbhost, $dbuser, $dbpwd, $dbname, $options;
		// include the uadodb api
		include_once($basepath . "inc/adodb5/session/adodb-session2.php");
		
        // start adodbsession engine
        $options['table'] = 'adodbsessions';
		ADOdb_Session::config($dbtype, $dbhost, $dbuser, $dbpwd, $dbname, $options);
		session_start();
		if ((rand()%10) == 0) adodb_session_regenerate_id(); 
	}
}
/*
Class TMPL(template)
Class ini digunakan untuk mempermudah templateing, untuk bagian templateing dan
webwireframe sementara disimpan pada class TMPL
= lists =
1.menu->default template
2.menu->member template
3.box
*/
class TMPL
{
	// FUNCTION MENU
	function showMenu($firstMenu = 'HOME',$secondMenu = 'BUY', $ThirdMenu = 'PROFILE',$fourthMenu = 'TOS',$fifthMenu ='HELP',$sixthMenu = 'HUBUNGI KAMI')
		{
			echo "<li><a title='Home' href='#'>$firstMenu</a></li><li><a title='Home' href='#'>$secondMenu</a></li><li><a title='Home' href='#'>$ThirdMenu</a></li><li><a title='Home' href='#'>$fourthMenu</a></li><li><a title='Home' href='#'>$fifthMenu</a></li><li><a title='Home' href='#'>$sixthMenu</a></li>";
		}
	// FUNCTION MENU IN MEMBERS
	function showMenuMember($firstMenu = 'ADMIN', $secondMenu = 'EDIT PROFILE', $ThirdMenu = 'EDIT PRODUCT',$fourthMenu = 'BANTUAN')
		{
			echo "<li><a title='Home' href='admin.php'>$firstMenu</a></li><li><a title='Home' href='edit.php'>$secondMenu</a></li><li><a title='Home' href='product.php'>$ThirdMenu</a></li><li><a title='Home' href='help.php'>$fourthMenu</a></li>";
		}
	// FUNCTION BOX(JUMLAH)
	function showBox($howMuch)
		{
		$i = 1;
		while($i <= $howMuch)
			{
			echo "<div class='partnerandwhybox'></div>";
			$i++;
			}
		}
}

/*
Class INFO(information /member)
Class ini akan digunakan untuk dibagian admin. admin dapat memberikan variable
pengumuman untuk pengumuman - peringatan untuk semua member
= todo =
- halaman product
= lists =
1.what->admin(halamanutama,editprodile,editproducts,tidakada(default)
2.billing->1(mauhabis)
*/
class INFO
{

	// FUNCTION what menjelaskan apa fungsi halaman ini
	function what($type='tidakada')
		{
		if($type == 'admin')
			{
				echo '<div class="adminpengumuman"><h3>Pengumuman!</h3><p>Admin berkata, saya adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus lorem semper neque viverra at vulputate enim placerat.In ut enim urna. Pellentesque feugiat dapibus posuere.Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p></div>';
			}
		elseif($type == 'pendaftaranterms')
			{
				echo '<div class="termspendaftaran corners4px"><h3>TERMS</h3>
						<p>Selamat datang di $url, kami adalah fans berat kenyamanan dan keamanan,
						 kami akan memberikan pengawasan <b>semaksimal</b> munkin terhadap pada custumer dan penjual
						 yang menggunakan website ini sebagai perantara bisnis atau pembelian anda, kami juga mengharapkan yang <i>sama</i> dari anda.
						 Hanya dengan membaca, memahami dan mengerti <a href="#">TOS</a> maka anda <b>diperbolehkan</b> meneruskan pendaftaran ini.
						</p>
					<h3>PRIVASI</h3>
						<p>Kami <b>sangat</b> menghargai privasi, kami tidak akan menggunakan data pribadi anda untuk disebarluaskan, riset dan penggunaan lainnya tampa sepengatuan anda,
						untuk lebih lengkapnya silahkan baca bagian <a href="#">Privacy Policy</a> untuk lebih lengkapnya. Dengan adanya Privacy Policy kami harap kenyamanan anda
						dapat lebih terjaga, untuk itu kami butuh bantuan anda untuk membaca dan saling mengingatkan atas hal ini.
						</p>
					<h3>VERIFIKASI</h3>
						<p>Kami akan memverifikasi data anda dengan menelfon anda atau dengan memantau tempat usaha anda. Oleh karena itu
						kami harap dapat memberikan data asli anda, karena kami <b>hanya</b> akan mengaktifkan account yang telah terverifikasi.
						</p>
					</div>
					
					';
			}		
		elseif($type == 'editprofile')
			{
				echo '<div class="admininformation"><h2>Informasi</h2><p>Anda dapat mengubah informasi yang berada pada halaman profile company disini,saya adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus lorem semper neque viverra at vulputate enim placerat. In ut enim urna. Pellentesque feugiat dapibus posuere.Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p></div>';
			}
		elseif($type == 'editproducts')
			{
				echo '<div class="admininformation"><h2>Informasi</h2><p>Anda dapat menambah product yang berada pada halaman profile company disini,saya adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus lorem semper neque viverra at vulputate enim placerat. In ut enim urna. Pellentesque feugiat dapibus posuere.Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p></div>';
			}
		elseif($type='tidakada')
			{
				echo 'tidak ada penjelasan';
			}
		}
	function billing($type)
		{
			if($type = 1)
			{
				echo '
				<div class="adminprivate">
				<h3>Segera hubungi billing</h3>
				<p>Admin berkata, Account bapak $anda akan segera habis. Donec tincidunt nisl vitae sem luctus facilisis. Pellentesque quis varius diam.</p>
				</div>';
			}
			else
			{
				echo 'blm ada';
			}
		}
}


// - sanitize field ($_POST, $_GET, $_COOKIE, dll)
function sanitize($data)
{
// remove whitespaces (not a must though)
	$data = trim($data); 

	// apply stripslashes if magic_quotes_gpc is enabled
	if(get_magic_quotes_gpc())
		{
			$data = stripslashes($data);
		}

		// a mySQL connection is required before using this function
		$data = mysql_real_escape_string($data);

		return $data;
}
// FUNGSI USER BROWSER NANTI DITARO DI BODY SETIAP HALAMAN BIAR TERATUR CSSNYA
function getUserBrowser()
{
	$uBrowser = $_SERVER['HTTP_USER_AGENT'];

	if(preg_match('/MSIE/i',$uBrowser))
	{
		$sBrowser = "ie";
	}
	elseif(preg_match('/Firefox/i',$uBrowser))
	{
		$sBrowser = "firefox";
	}
	// Chrome beta pake safari jadi gw taro diatas
	elseif(preg_match('/Chrome/i',$uBrowser))
	{
		$sBrowser = "chrome";
	}
	elseif(preg_match('/Safari/i',$uBrowser))
	{
		$sBrowser = "safari";
	}
	elseif(preg_match('/Flock/i',$uBrowser))
	{
		$sBrowser = "flock";
	}
	elseif(preg_match('/Opera/i',$uBrowser))
	{
		$sBrowser = "opera";
	}
	echo $sBrowser;
} 


?>