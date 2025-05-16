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

<?php printsidebar($_SERVER['PHP_SELF']); ?>

<div class="content">
<h1>Anaheim Weather Forecast </h1>
<p>
<!-- start weather widget code-->
<a class="weatherwidget-io" href="https://forecast7.com/en/33d84n117d91/anaheim/?unit=us" data-label_1="ANAHEIM" data-label_2="WEATHER" data-theme="original" >ANAHEIM WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<!-- end weather widget code-->
</p>

</div>


<div style="clear: both;">
</div>

</div>


<?php printfooter();?>

</body>
</html>