<?php

// INI SETTINGS
ini_set("arg_separator.output","&amp;");
	//makes documents W3C compliant

require_once __DIR__ . '/config.php';

// CACHE SETTINGS
header("Cache-control: private, no-cache");

//DEFINE CONSTANTS
define("DEFAULT_EMAIL","phil@ahbikes.com");
define("TIME_OFFSET","-10800");
	//difference between server and local time (in seconds)
	//west is negative, east is positive

// // MYSQL SETTINGS
// function dbconnect() {
// 	$datalink = mysql_connect(DB_HOST,DB_USER,DB_PASS)
// 		or die ("Unable to connect to database server.");
// 	mysql_select_db(DB_DB)
// 		or die ("Unable to select database \"ahb_dev\".");
// }

// function dbclose() {
// 	mysql_close($datalink);
// }

// HTTP + HTML FUNCTIONS
function printflag(){ /* top of each page */
	echo '
		<map name="map" id="map">
			<area shape="rect" coords="164,0,564,70" href="/index.php" />
			<area shape="rect" coords="700,50,730,70" href="/contact.php" />
		</map>
		<div>
		<a name="top" />
			<img class="flag" src="img_gen/flagB_2_h70.jpg" alt="Anaheim Hills Bike Shop" width="730" height="70" border="0" usemap="#map" />
		</div>
		';
}

function printsidebar($ind){

	$sidebar_arr =	array( 		'index.php' => array('title' => 'Home', 'sub' => 0),
								'merch.php' => array('title' => 'Products', 'sub' => 0),
								'serv.php' => array('title' => 'Service & Repair', 'sub' => 0),
								'res.php' => array('title' => 'Resources', 'sub' => 0),
								'res_clubs.php' => array('title' => 'Bicycle Clubs', 'sub' => 1),
								'res_mtbtr.php' => array('title' => 'MTB Trails', 'sub' => 1),
								'merch_maps.php' => array('title' => 'Maps & Guidebooks', 'sub' => 1),
								'weather.php' => array('title' => 'Weather Forecast', 'sub' => 1),
								'about_hr.php' => array('title' => 'Store Hours', 'sub' => 0),
								'about_loc.php' => array('title' => 'Store Location', 'sub' => 0),
								'contact.php' => array('title' => 'Contact Us', 'sub' => 0),
					);
	
	echo 	'<ul class="rollmenu">'."\r\n";
			
	foreach($sidebar_arr as $href => $prop){
		echo 	'<li><a';
		echo 	' href="'.$href.'"';
		if($ind == $href && $prop['sub'] == 1){
			echo ' class="subind">&raquo; '.$prop['title'];
		}elseif($ind == $href){
			echo ' class="ind">'.$prop['title'];
		}elseif($prop['sub'] == 1){
			echo ' class="sub">&raquo; '.$prop['title'];
		}else{
			echo '>'.$prop['title'];
		}
		echo	'</a></li>'."\r\n";
	}
	echo	'</ul>'.
				"\r\n";
}

function printfooter(){ /* bottom of each page */
	echo '
	
		<div class="link-note" align="center">
		&copy;'.date("Y").' Anaheim Hills Bike Shop | <a href="#top">top</a> | <a href="/contact.php">contact us</a>
		</div>
	
		';
}
?>