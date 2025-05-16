<?php require('lib.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us | Anaheim Hills Bike Shop</title>
<link rel="stylesheet" href="styles-site.css" type="text/css" />
</head>

<body>

<?php printflag(); ?>

<div id="container">

<?php printsidebar($PHP_SELF); ?>

<div class="content">
<img src="img_gen/stock_w100_01.jpg" width="100" height="150" class="right" />
<h1>Phone</h1>
<p>(714) 779-7521</p>
<h1>Email</h1>
<form class="form" name="contact" id="contact" method="post" action="contact_process.php">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right" valign="top">Name: </td>
      <td align="left"><input name="name" type="text" class="200" size="32" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">Email address:</td>
      <td align="left"><input name="email" type="text" class="200" size="32" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">Message:</td>
      <td align="left"><textarea name="msg" cols="36" rows="6" wrap="physical"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="send" value="Send Message" /></td>
    </tr>
  </table>
</form>
<h1>Mail</h1>
<p>
	Anaheim Hills Bike Shop<br />
	5548 E. La Palma Ave.<br />
	Anaheim Hills, CA 92807
</p>
</div>


<div class="content"></div>

<div style="clear: both;">
</div>

</div>


<?php printfooter();?>

</body>
</html>