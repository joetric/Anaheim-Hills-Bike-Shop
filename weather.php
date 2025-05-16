<?php require('lib.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anaheim Weather Forecast | Anaheim Hills Bike Shop</title>
<link rel="stylesheet" href="styles-site.css" type="text/css" />
</head>

<body>

<?php printflag(); ?>

<div id="container">

<?php printsidebar($PHP_SELF); ?>

<div class="content">
<img src="img_gen/wr.gif" style="float:right;" />
<h1>Anaheim Weather Forecast </h1>
<p>
<a href="http://www.weatherroom.com/forecast/92807.html" target="_blank">
<img src="http://www.weatherroom.com/cgi-bin/weather.cgi?forecast=zone&hwvtc=black&hwvbg=white&pands=92807&config=png&alt=hwizone&daysonly=1" alt="Loading..." width="300" height="200" border="0" class="left" />
</a>
</p>

</div>


<div style="clear: both;">
</div>

</div>


<?php printfooter();?>

</body>
</html>