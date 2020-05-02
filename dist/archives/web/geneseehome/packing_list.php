<?php 
// change with each page
$page_id = 'packing_list';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><?php include_once("includes/meta_keywords.php"); ?>
<title>Genesee Home</title>
<script language="javascript">
AC_FL_RunContent = 0;
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/request_visit_form.css" rel="stylesheet" type="text/css">
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
            <img src="pics/genesee_general_thumb.jpg" width="157" height="139" border="0"/>            </td>
            
            <td valign="top" class="header_image"> <!-- begin HEADER IMAGE td -->
            <img src="pics/packinglist_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
                
                
              <p>We want all our guests at Genesee Home to receive the utmost pleasure from their visit with us. Therefore, to ensure your comfort while visiting, we have provided below a suggested packing list for each season. Dress at Genesee Home is casual and comfortable.</p>

<p class="required_text" onClick="MM_openBrWindow('packinglist_printable.php','packinglist','menubar=yes,width=400,height=550')">Please click here to print the list.</p>

<div id="packing_list">
<span class="packing_list_header">ALL SEASONS</span>
<uL>
    <li> Jeans/Long Pants</li>
    <li> Camera and film</li>
    <li> Sun Glasses</li>
    <li> Hiking boots</li>
    <li> Hat</li>
    <li> Bible</li>
    <li> Fishing Gear (if you prefer your own; otherwise we have enough!)</li>
    <li> Sunscreen</li>
    <li> House shoes/slippers - (the home is a "shoes off" environment)</li>
</uL>
<br />
<br />
<span class="packing_list_header">FALL</span>Average Temperatures: High: 71&deg;F / Low: 31&deg;F
<ul>
    <li> Warm Jacket</li>
</ul>
<br />
<br />
<span class="packing_list_header">WINTER</span>
Average Temperatures: High: 49&deg;F / Low: 23&deg;F
<ul>
    <li> Warm Hat</li>
    <li> Very warm jacket</li>
</ul>
<br />
<br />
<span class="packing_list_header">SPRING</span>
Average Temperatures: High: 65&deg;F / Low: 31&deg;F
<ul>
    <li> Warm Jacket</li>
</ul>
<br />
<br />
<span class="packing_list_header">SUMMER</span>
Average Temperatures: High: 88&deg;F / Low: 41&deg;F
<uL>
    <li> Mosquito repellant</li>
    <li> Light Jacket for late evenings and early mornings</li>
    <li> Water shoes for rafting or canoeing</li>
    <li> Bathing Suit/Beach Towel</li>
    </uL>
    </div>
<!-- BUTTON -->
            
    		
               <br />
               <br />
          
           
       
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
