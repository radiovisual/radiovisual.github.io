<?php 
// change with each page
$page_id = 'activities';
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
            <img src="pics/values_thumb.jpg" width="157" height="139" border="0"/> <br />
            <img src="pics/activities_thumb2.jpg" width="157" height="139" border="0"/> 
             <br />
            <img src="pics/activities_thumb3.jpg" width="157" height="139" border="0"/>                       </td>
            
            <td valign="top" class="header_image"> <!-- begin HEADER IMAGE td -->
            <img src="pics/activites_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
                
                
               <span class="header_bold">INDOOR:</span><br /><br />
<ul>
    <li> a well maintained library</li>
    <li> a rustic prayer barn suitable for reading, meditation and reflection</li>
    <li> interaction with host couple and other guests</li>
    <li> guided discussions on marriage, family & ministry</li>
    <li> a small selection of books in each guest room</li>
    <li> uninterrupted time as a couple</li>
    <li> prayer and encouragement by Host Couple</li>
</ul>
<br /><br />
<span class="header_bold">OUTDOOR:</span><br /><br />
<ul>
    <li> prayer walks</li>
    <li> walks along creek, meadow, forest</li>
    <li> hikes - mountain, creek, meadow</li>
    <li> mountain biking</li>
    <li> jogging</li>
    <li> canoeing on Indian Creek</li>
    <li> rowing boat on a pond</li>
    <li> picnics</li>
    <li> fishing</li>
    <li> swimming in the creek, ponds or Antelope Lake</li>
    <li> sitting around the camp fire</li>
    <li> exploring God's creation</li>
    <li> quietly sitting in God's creation</li>
    <li> numerous secluded spots for sitting quietly</li>
    </ul>        
            <br /><br />
            <!-- BUTTON -->
            
       
           <a href="photo_gallery.php"><img src="pics/viewphotos_button.jpg" border="0" /></a> <br /><br/>
           <a href="area_map.php"><img src="pics/area_map_button_small.jpg" border="0" />
         <br />
         <br /><br /><br />
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
