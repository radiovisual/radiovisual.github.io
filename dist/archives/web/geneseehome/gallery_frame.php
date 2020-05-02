<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo Gallery</title>

<style type="text/css">
<!--
body {
	margin: 0px;
	padding: 0px;
}
.topBG {
	background-color: #CDCDCD;
	background-image: url(pics/gallery_frame_toptile.jpg);
	background-repeat: repeat-x;
	margin: 0px;
	height: 26px;
	font-family: verdana, Arial, Helvetica, sans-serif;
	color: #990000;
	font-size: 10px;
	padding-top: 0px;
	padding-right: 15px;
	padding-bottom: 0px;
	padding-left: 0px;
}
.closeTD {
	height: 26px;
	width: 140px;
	margin: 0px;
	padding: 0px;
}
-->
</style>
</head>

<body bgcolor="#cdcdcd" bottommargin="0" topmargin="0" leftmargin="0" rightmargin="0" onBlur="self.focus()">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

<tr><td class="topBG" align="right">Please close this window before viewing other photos/pages</td></tr>

<tr><td align="center" valign="middle" colspan="2">

<?php 

if (isset($_GET['id'])){
	$id = $_GET['id'];
}

?>


<?php if (!file_exists("pics/gallery_pics/".$id."\"")){
	echo "<b>photo was not found</b>";
} else {
	echo "<img src=\"pics/gallery_pics/".$id."\"\/>";
}

?>



 






 




</td></tr></table>
</body>
</html>

