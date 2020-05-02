<?php 
// change with each page
$page_id = 'area_map';
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
        	<td valign="top" > &nbsp;<!-- begin HEADER IMAGE td --></td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="center_image" align="center">
            	<?php // NEW TEXT STARTS HERE ?>
      
      <table class="center_table">
      <tr><td><img src="pics/areamaps_header.jpg" width="508" height="37" /></td></tr>
      <tr><td class="infoTD_text_areamap">Genesee Home is located in Genesee Valley in the northern Sierra Nevada of California - less than three hours by car from Reno, and less than a day driving from anywhere in California. Of course, once you're here, you'll feel like you are a million miles away from your daily concerns.</td></tr>
      <tr><td><img src="pics/area_map_terrain_gh_location.jpg" width="508" height="523" border="0" /></td>
      </tr>
         <tr><td> 
          <br /><br />
          <a href="driving_directions.php"><img src="pics/driving_directions_button.jpg" border="0" /></a><br /><br />
          <a href="http://maps.google.com/maps?f=q&hl=en&geocode=&q=7202+Genesee+Road,+Taylorsville,+California+95983&sll=37.0625,-95.677068&sspn=50.644639,82.265625&ie=UTF8&ll=40.044438,-120.750732&spn=5.928283,10.283203&z=7&iwloc=addr" target="_blank"><img src="pics/view_google_maps_button.jpg" border="0" /></a>

</td>
         </tr></table>


            <br />
            <!-- BUTTON -->
            
            <?php 
			// EASY CODE FOR A BUTTON IF YOU WANT
            // <a href="faq.php"><img src="pics/faq_button.jpg" border="0" /></a> 
            ?>
            <!-- END BUTTON -->
            	<?php // NEW TEXT ENDS HERE ?>            </td>
        </tr> <!-- end TR for row 1 -->
        
        <tr><td class="horz_rule">&nbsp;</td></tr> <!-- horizontal rule -->
        
        <tr>
        	<td valign="top" class="header_image"> <!-- begin HEADER IMAGE td --></td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	  
     <?php 
	 // this is where the info for the second tr can go if you want
	 ?>
</td>
        </tr>
        
        <tr><td class="horz_rule">&nbsp;</td></tr> <!-- horizontal rule -->
        
       <!-- TH -->
       </table> 
       <!--- END TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
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
