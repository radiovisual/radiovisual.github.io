<?php 
// change with each page
$page_id = 'history';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><?php include_once("includes/meta_keywords.php"); ?>
<title>Genesee Home</title>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#ffffff"  marginheight="0" leftmargin="0" rightmargin="0" bottommargin="0" topmargin="0">

<div align="center">
<table class="main" border="0" cellpadding="0" cellspacing="0">
	<tr>
    	<td colspan="4">

<?php require_once("includes/subpage_flash_include.php"); ?>



		</td>
    </tr> <!-- end flash nav tr -->
    <tr>
  
    	<td class="leftbuffer">  <!-- begin buffer td for left REQUEST VISIT-->
        &nbsp;
        </td>
        
        <td width="313" class="leftCol_request" valign="top"> <!-- begin left col table -->
        	
            <?php include_once("includes/request_visit_form_include.php"); ?> <!-- end request visit table -->        
            </td> 
      
      
      
      <!--- BEGIN CONTEXT SENSITIVE INFO -->
      
      <td class="rightCol_contextinfo" valign="top" align="right"> <!-- begin right col table -->
       
       
       
       <div id="contextSensitiveTable">
       <!--- BEGIN TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
       <table cellpadding="0" cellspacing="0" border="0" width="630"> <!-- begin context sensitive table -->
       	
        <!-- CFH  -->
        <tr>
        	<td valign="top" rowspan="2"> <!-- begin THUMBS td -->
            <img src="pics/history_thumb.jpg" width="157" height="139" border="0"/>            </td>
            
            <td valign="top" class="header_image"> <!-- begin HEADER IMAGE td -->
            <img src="pics/history_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
                
                
               <p>The Genesee Valley was first settled when emigrants heading West stopped to mine or farm the land. One of the first settlers, Edwin Hosselkus, opened the Genesee Country Store on the property to serve travelers and the local residents in 1858, and that original building still stands about 25 yards north of the present store.</p>

 <p>In the late 1800's, the Genesee Country Store was a stop for the stagecoach that ran between Reno, Nevada and Portland, Oregon. Passengers would get a lunch break at the store and sit on the same front porch that exists today. </p>

 <p>Mr. Hosselkus purchased the ranch in 1862, and settled in to make the property his home in 1865. He built the first brick house in the valley in 1881; a house which has recently been completely refurbished to serve as a place for pastoral renewal and now serves as Genesee Home. Many of the barns on the property are original buildings also dating back to the late 1800's. </p>

 <p>Genesee District School opened in the fall of 1865 to serve the local children, and the first post office was established in the area in 1880 in the Genesee Country Store. </p>



            
            <br />
            <!-- BUTTON -->
            
      
          <a href="photo_gallery.php"><img src="pics/viewphotos_button.jpg" border="0" /></a> 
         
            <!-- END BUTTON -->
            	<?php // NEW TEXT ENDS HERE ?>            </td>
        
        </tr> <!-- end TR for row 1 -->
        
        <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
        
        <tr>
        	<td valign="top" rowspan="2"> <!-- begin THUMBS td -->
            <img src="pics/giftofavisitthumb.jpg" width="159" height="139" border="0"/>
            
            </td>
            
            <td valign="top" class="header_image"> <!-- begin HEADER IMAGE td -->
            <img src="pics/thegiftofavisit.jpg" width="470" height="35" border="0"/>
            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	  
                   <ul>
                   <li>Are you a member of an Evangelical Church and interested in supporting your Pastor?</li>
    <li>Would you like to give a gift of appreciation to an Inner City Pastor?</li>
    <li>Would you like to give a gift of appreciation to a church planting pastor?</li>
    <li>Would you like to give a gift of appreciation to a Missionary?</li>
    <li>Are you a Mission's Pastor or Chairperson of a Mission's Committee of your local church and looking for your way to bless your Missionary couples?</li>
</ul>
<p>If you can answer YES to any of these, then visit our "Gift of a Visit" section to learn more about this part of Genesee Home's ministry.</p>
            
            
            <!-- BUTTON -->
              <a href="gift_pastor.php"><img src="pics/give_a_gift_pastor_button.jpg" border="0" /></a><br /><br />
            <a href="gift_missionaries.php"><img src="pics/give_a_gift_missionaries_button.jpg" border="0" /></a><br />
            
            
            </td>
        
        </tr>
        
        <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
        
       <!-- TH -->
       
       
       </table> <!--- END TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
       </div>
       
       <!--- END CONTEXT SENSITIVE INFO -->
       
      </td>
    </tr>
    
    
    <!-- BEGIN FOOTER -->
 <?php include_once("includes/footer.php"); ?>
    <!-- END FOOTER -->
</table> <!-- end main table -->
</div>
</body>
</html>
