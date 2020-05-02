<?php 
// change with each page
$page_id = 'mailing_list';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><?php include_once("includes/meta_keywords.php"); ?>
<title>Genesee Home</title>
<script>
	function MM_openBrWindow(theURL,winName,features) { //v2.0
 		window.open(theURL,winName,features);
		}
</script>
<script src="AC_RunActiveContent.js" language="javascript" type="text/javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/request_visit_form.css" rel="stylesheet" type="text/css">





</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0"  marginheight="0" onLoad="MM_preloadImages('pics/gallery_thumbs/General/100_0097.jpg')">

<div align="center">
<table class="main" border="0" cellpadding="0" cellspacing="0">
	<tr>
    	<td colspan="4"><?php require_once("includes/subpage_flash_include.php"); ?></td>
    </tr> <!-- end flash nav tr -->
    <tr>
  
    	<td class="leftbuffer">  <!-- begin buffer td for left REQUEST VISIT-->
&nbsp;        </td>
        
        <td class="leftCol_request" valign="top"> <!-- begin left col table -->
        	
            
            <?php include_once("includes/left_column_only_contact_info_include.php"); ?>
            
            
             <!-- end request visit table -->            </td> 
      
      
      
      <!--- BEGIN CONTEXT SENSITIVE INFO -->
      
      <td class="rightCol_contextinfo" valign="top" align="right"> <!-- begin right col table -->
       
       
       
       
       <!--- BEGIN TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
       <table cellpadding="0" cellspacing="0" border="0" > <!-- begin context sensitive table -->
       	
        <!-- CFH  -->
        <tr>
        	<td valign="top" rowspan="2" class="thumb_pic"> <!-- begin THUMBS td -->
            <img src="pics/genesee_general_thumb.jpg" width="157" height="139" border="0"/> </td>
            
            <td valign="top" class="header_image" align="left"> <!-- begin HEADER IMAGE td -->
            <img src="pics/mailing_list_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
               
               <?php // BEGIN REQUEST FORM TABLE ?>
               
               <form name="request_form" method="post" action="mailing_list_process.php">
               <table class="request_visit_form_table"> 
                	<tr>
                	  <td colspan="2" class="general_form_text" >
                    

<span class="header_bold">Join The Genesee Home Mailing List!</span> <br />
Thank you for your interest in Genesee Home. We look forward to providing you with timely updates about our ministry.
<br /><br />
Your information will not be sold, shared or made available to anyone and you may be deleted from any mailing list by simply sending us your request by email.<br /><br />
<span class="required_text">* indicates a required field</span>                    </td>
               	  </tr>
                    
                   
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Recipient's Name:</td>
                   	  <td class="right_form_col"><input type="text" name="ml_full_name" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Email Address:</td>
                   	  <td class="right_form_col"><input type="text" name="ml_email_address" class="input_text"></td>
                	</tr>
                    
               
                    
                    <tr>
                    	<td class="general_form_text" colspan="2" align="left">
                        <input type="submit" name="submit_button" class="submit_button" value="Submit Request">                        </td>
                	</tr>
                </table>
               <?php // END REQUEST FORM TABLE ?>
               </form>
            
            <br /><br /><br /><br />
            <!-- BUTTON -->
            
        <?php // BUTTON
           // <a href="photo_gallery.php"><img src="pics/viewphotos_button.jpg" border="0" /></a> 
          ?>
            <!-- END BUTTON -->
            	<?php // NEW TEXT ENDS HERE ?>            </td>
        </tr> <!-- end TR for row 1 -->
        
 
        
        
        
        
        
        <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
        
       <!-- TH -->
       </table> <!--- END TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
      
       
       <!--- END CONTEXT SENSITIVE INFO -->      </td>
    </tr>
    
    
    <!-- BEGIN FOOTER -->
 <?php include_once("includes/footer.php"); ?>
    <!-- END FOOTER -->
</table> 
<!-- end main table -->
</div>
</body>
</html>
