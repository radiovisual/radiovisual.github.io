<?php 
// change with each page
$page_id = 'special_pricing';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><?php include_once("includes/meta_keywords.php"); ?>
<title>Genesee Home</title>
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
            <img src="pics/special_pricing_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
               
               <?php // BEGIN REQUEST FORM TABLE ?>
               
               <form name="request_form" method="post" action="request_form_process.php">
               <table class="request_visit_form_table"> 
                	<tr>
                	  <td class="general_form_text" >
                   <p><span class="header_bold">A Taste of Genesee Home</span></p>
                  <p>We are trying a New Thing this spring. Would you like to try Genesee Home but can't take advantage of our full week. Try our special Taste of Genesee Home. The first week is April 4 - 7, 2005. That's three nights and two full days of Sabbath Break. Call the office for details or go to our <a href="request_a_visit.php">Request A Visit</a> Form and complete the application. The cost for this will $ 300 per couple.</p>

<p>With this option you still recieve all of Genesee Home's famous hosptiality, a wonderful <a href="photos.php#Garden">private room</a>, three gourmet meals a day, and an opportunity to take advantage of all the <a href="activities.php">recreation</a> and spiritual activities that Genesee Home offers.</p>

<p>While at Genesee Home our prayer is that you will truly experience a Sabbath Rest, you will be filled with God's Holy Spirit, and you will be strengthened and sustained. Our desire is to welcome you with hospitality and send you on your way filled with the peace of Christ.</p>

<p>We encourage you to complete our <a href="request_a_visit.php">Request A Visit</a> Form so we can reserve a space for you and your spouse to step out of your busy life and ministry and into God's presence.</p>

<p>A visit to Genesee Home is a Sabbath Rest for renewal and refreshment of your ministry and marriage. Remember at Genesee Home you set your own agenda and can be as active as your desire.</p>

<p>My wife, <a href="host_couple.php">Bev and I</a> look forward to welcoming you as a guest of Genesee Home to enjoy a quiet, relaxing time in a supreme example of God's creation.</p>

<p><strong>Charley Blom</strong><br />
Genesee Home Ministry Director</p>

<br />
                    <br />
                  <br/>                 </td></tr>
                    
                    
            
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
