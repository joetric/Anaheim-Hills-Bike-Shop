<?php require('lib.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Anaheim, bicycle, bike, cycling, Trek, Gary Fisher, Klein" />
<meta name="description" content="Sells bikes and accessories from Trek, Gary Fisher, Klein, Pinarello, Redline, Free Agent, Compagnolo, and more!" />
<title>Anaheim Hills Bike Shop</title>
<link rel="stylesheet" href="styles-site.css" type="text/css" />
<link rel="stylesheet" href="styles-home.css" type="text/css" />

</head>

<body>

<?php printflag(); ?>

<div id="container">
<?php printsidebar($_SERVER['PHP_SELF']); ?>
<div class="content">
<img src="img_hom/home-1a.jpg" alt="20% off any new bike of $150 or more!" width="360" height="300" border="0" /><img src="img_hom/home-1b.jpg" alt="Call us at (714) 779-7521" width="185" height="300" border="0" />
<img src="img_hom/home-2.jpg" alt="20% off parts and accessories with purchase of at least $50!" width="545" height="80" />
<img src="img_hom/home-3.jpg" width="545" height="170" border="0" usemap="#map-home" />
<map name="map-home">
  <area shape="rect" coords="155,5,545,170" href="about_loc.php" alt="Click here for a map to our store" />
</map>
</div>
<div style="clear:both;"></div>

</div>


<?php printfooter();?>

</body>
</html>