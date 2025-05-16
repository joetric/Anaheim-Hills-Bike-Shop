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

<?php printsidebar('/contact.php'); ?>

<div class="content">
<?php if(isset($_POST[send])) {
	foreach($_POST as $varname) {
	$varname=$value;
	}
	$msg = str_replace("\r\n","<br />",$msg);
	if(isset($em)) unset($em);
	if(!$name) $em .= "&raquo; Please enter your name.<br />";
	$limits = "^[_A-Za-z0-9-]+@[_A-Za-z-]+(\.[A-Za-z]+)(\.[A-Za-z]+)*$";
    if(!ereg("$limits",$email)) $em .= "&raquo; Please enter a valid email address.<br />";
	if (!($em)) {#tests passed
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $name <$email>\r\n";
		$msg = stripslashes($msg);
		mail(DEFAULT_EMAIL,"ahbikes.com | ".strip_tags(str_replace("<br />"," ",substr($msg,0,64))),$msg,$headers);
		echo 	'
				<h1>Thank You!</h1>
				<p>Your message has been received and will be responded to as soon as possible.</p>
				';
	} else { #test failed
		echo 	'
				<h1>Error</h1>
				<p>'.$em.'</p>
				<form class="form" name="contact" id="contact" method="post" action="contact_process.php">
				  <table  border="0" cellspacing="2" cellpadding="0">
					<tr>
					  <td align="right" valign="top">Name: </td>
					  <td align="left"><input name="name" type="text" class="200" size="32" value="'.$name.'"/></td>
					</tr>
					<tr>
					  <td align="right" valign="top">Email address:</td>
					  <td align="left"><input name="email" type="text" class="200" size="32" value="'.$email.'"/></td>
					</tr>
					<tr>
					  <td align="right" valign="top">Message:</td>
					  <td align="left"><textarea name="msg" cols="48" rows="6" wrap="physical">'.$msg.'</textarea></td>
					</tr>
					<tr>
					  <td >&nbsp;</td>
					  <td><input type="submit" name="send" value="Send Message" /></td>
					</tr>
				  </table>
				</form>
				';
	} 
}?>
</div>

<div style="clear: both;">
</div>

</div>


<?php printfooter();?>

</body>
</html>