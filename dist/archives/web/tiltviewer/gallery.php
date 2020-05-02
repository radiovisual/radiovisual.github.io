<?php 
$screen_height = $_GET['height'];
$flash_height = $screen_height - 100;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Paul Nissen Photography</title>
<script type="text/javascript" src="swfobject.js"></script>
<style type="text/css">	
	/* hide from ie on mac \*/
	html {
		height: 100%;
		overflow: hidden;
	}
	
	#flashcontent {
		height: <?php echo $flash_height."px;" ?>
	}
	/* end hide */
	
	#footer{
	font-family: Helvetica, Arial sans-serif;
	color: #99FF99;
	background-color: #996666;
	padding: 0px;
	height: 100px;
	width: 100%;
	overflow: hidden;
	position: static;
	visibility: visible;
	z-index: -9;
	bottom: 146px;
	left: 9px;
	}
	body {
		height: 100%;
		margin: 0;
		padding: 0;
		background-color: #000000;
		color:#ffffff;
		font-family:sans-serif;
		font-size:40;
	}

	a {	
		color:#cccccc;
	}
</style>
</head>
<body>
	<div id="flashcontent">This site requires JavaScript and the latest Flash player. <a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a></div>
	<script type="text/javascript">
	
		var fo = new SWFObject("TiltViewer.swf", "viewer", "100%", "100%", "9.0.28", "#000000");			
		
		// TILTVIEWER CONFIGURATION OPTIONS
		// To use an option, uncomment it by removing the "//" at the start of the line
		// For a description of config options, go to: 
		// http://www.airtightinteractive.com/projects/tiltviewer/config_options.html
															
		//FLICKR GALLERY OPTIONS
		// To use images from Flickr, uncomment this block
		//fo.addVariable("useFlickr", "true");
		//fo.addVariable("user_id", "48508968@N00");
		//fo.addVariable("tags", "jump,smile");
		//fo.addVariable("tag_mode", "all");
		//fo.addVariable("showTakenByText", "true");			
		
		// XML GALLERY OPTIONS
		// To use local images defined in an XML document, use this block		
		fo.addVariable("useFlickr", "false");
		fo.addVariable("xmlURL", "gallery.xml");
		fo.addVariable("maxJPGSize","700");
		
		//GENERAL OPTIONS		
		fo.addVariable("useReloadButton", "false");
		fo.addVariable("columns", "4");
		fo.addVariable("rows", "4");
		fo.addVariable("showFlipButton", "false");
		fo.addVariable("showLinkButton", "false");		
		//fo.addVariable("linkLabel", "View image info");
		//fo.addVariable("frameColor", "0xFF0000");
		//fo.addVariable("backColor", "0xDDDDDD");
		//fo.addVariable("bkgndInnerColor", "0xFF00FF");
		//fo.addVariable("bkgndOuterColor", "0x0000FF");				
		//fo.addVariable("langGoFull", "Go Fullscreen");
		//fo.addVariable("langExitFull", "Exit Fullscreen");
		//fo.addVariable("langAbout", "About");				
		
		// END TILTVIEWER CONFIGURATION OPTIONS
		
		fo.addParam("allowFullScreen","true");
		fo.write("flashcontent");			
	</script>
    
    <div id="footer">
    <table>
    	<tr>
        	<td>
            <img  src="imgs/logo/logo.jpg" border="0" width="309" height="99"/>           </td>
            <td>
            contact info            </td>
        </tr>
    </table>
    	</div>
</body>
</html>