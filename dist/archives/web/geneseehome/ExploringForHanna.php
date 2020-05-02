<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exploring for Hanna</title>
</head>

<body>


<?php

$year = 2006;
$month = 12;
$day = 01;

// Jan to Dec
$days_in_month = array(0,31,29,31,30,31,30,31,31,30,31,30,31);

$maxDays = 1825;
$endDay = 4;
$endMonth = 3;
$endYear = 2008;

$days = array();

for ($f=1;$f<$maxDays;$f++){
		
		flush(); ob_flush();
			
		if ($day == $endDay && ($month == $endMonth) && ($year == $endYear) ){ break; } // end break if
		
		for ($i=1;$i<51;$i++){
			
			//$url = "http://www.flickr.com/hanna_e/";
			$url = "http://www.flickr.com/explore/interesting/".$year."/".$month."/".$day."/page".$i;
	
			$file = file_get_contents($url);
	
			$reg = '/photos\/hanna_e\/([0-9]+)/';
			
			if (preg_match($reg,$file,$matches)){
			
			//echo $matches[1];
			
				$message = "found hanna on ".$month."/".$day."/".$year." on page# ".$i;
				echo "<b>".$message."</b><br />"; 	
				array_push($days,$message);
				
				$filename = 'hanna.txt';
				$somecontent = $message."\n";
				$handle = fopen($filename, 'a');
				fwrite($handle, $somecontent);
				
			} else {
				echo "nothing on ".$month."/".$day."/".$year." page# ". $i."<br/>";
			}
			flush();
			ob_flush();


		} // end for

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
	
} // end for	 
} // end for



echo "SEARCH COMPLETED";

for ($a=0;$a<count($days);$a++){
	
	echo $days[$a]."<br />";

}














?>

<form name="code" action="#" method="post">
	<input type="submit" name="submit" value="<?php echo "GET ".$month."/".$day."/".$year; ?>" />
    <input type="hidden" name="month" value="<?php echo $month; ?>" />
    <input type="hidden" name="day" value="<?php echo $day; ?>" />
    <input type="hidden" name="year" value="<?php echo $year; ?>" />
</form>
</body>
</html>
