<?php 
    date_default_timezone_set("Asia/Baghdad");
	$objDateTime = new DateTime('NOW');
	// ISO8601 formated datetime
 	$arr = array('jordantime'=>$objDateTime->format('c'));
    echo json_encode($arr);
?>