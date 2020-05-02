<?php 
//$screen_height = $_COOKIE['paul_height'];
//$screen_width = $_COOKIE['paul_width'];
//$flash_height = ($screen_height - 120);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paul Nissen Photography</title>
<script type="text/javascript" src="swfobject.js"></script>
<style type="text/css">	
	/* hide from ie on mac \*/
	html {
		height: 100%;
		overflow:hidden;
		
	}
	
	#flashcontent {
		height: 100%;
	}
	/* end hide */
	
	.footer{
	font-family: Helvetica, Arial sans-serif;
	color: #99FF99;
	background-color: #000000;
	padding: 0px;
	height: 100%;
	width: 200px;
	border-right-width: thin;
	border-right-style: solid;
	border-right-color: #333333;	

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
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
 <tr>
 
 	<td class="footer" align="center" valign="middle">
            <img  src="imgs/logo/logo.jpg" border="0" width="200" height="64"/>        
             </td>
             
        
             
 	<td height="100%">
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
   </td>
   	</tr>
   
    	
        
           
        </tr>
    </table>
    	
</body>
</html>