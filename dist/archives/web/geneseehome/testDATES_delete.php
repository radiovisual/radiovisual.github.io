<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$year = 2006;
$month = 12;
$day = 4;

// Jan to Dec
$days_in_month = array(0,31,29,31,30,31,30,31,31,30,31,30,31);

for ($i=1;$i<1095;$i++){
if ($day == 05 && ($month == 03) && ($year == 2008) ){
	break;
} // end break if

$day++;
if ($day > $days_in_month[$month]){
	
	if ($month > 12){
		$year++;
		$month = 1;
		$day = 1;
	} else {
		$month++;
		$day = 1;
	}// end if
	
	 
} 

echo $day . " " .$month." ".$year."<br />";

} // end for
?>
</body>
</html>
