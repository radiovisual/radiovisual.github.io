<?php 
// change with each page
$page_id = 'about_us';
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
            <img src="pics/bev&char_thumb.jpg" width="157" height="139" border="0"/>            </td>
            
            <td valign="top" class="header_image"> <!-- begin HEADER IMAGE td -->
            <img src="pics/whoeweare_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
                
                
               <p> The primary ministry of Genesee Home is to provide an environment where Pastors, Missionaries and their spouses can break away from their normal daily routine and retreat to a wilderness setting free from the distractions of ministry. Below is a current description of the ministry program offered by Genesee Home.</p>

<p>A Sabbath week at Genesee Home is an opportunity for the Holy Spirit to minister to Pastors and their spouses. In addition to giving you a beautiful space and uninterrupted time for the work of the Holy Spirit we offer the following resources:</p>
            
            <ul>
    <li> Quiet time to be in the presence of God</li>
    <li> Uninterrupted time with your spouse</li>
    <li> Opportunities to be inspired by God regarding your ministry, personal walk, calling, etc.</li>
    <li> Prayer time, both individually, as couples, and with other Pastors, Missionaries and spouses</li>
    <li> Time in the Word</li>
    <li> Time to just relax and let go</li>
    <li> Reading time (many resources are provided)</li>
    <li> Opportunity to fellowship over dinner and throughout the evening with our host couple and the other guests.</li>
    <li> Discussions on marriage, family and ministry</li>
    <li> Opportunities for recreation on the ranch</li>
    <li> We ask that you observe a fast from most electronic media such as cell phones, faxes, computers and the internet.</li>
    <li> Encouragement, a listening ear, prayer, and Spiritual Direction as need with our Host Couple.</li>

            
            </ul>
            
           <p> We <b>do not</b> provide the following:</p>
           
           <ul>
               <li>Professional counseling</li>
   <li>Therapy sessions</li>

           
           </ul>
           
          <p>If there is a need for formal counseling, please visit our <a href="resources.php">resource section</a> for links to other Christian Ministries we recommend or contact our <a href="mailto:ministrydirector@geneseehome.org">Ministry Director</a> for assistance.</p>
            
            
            <br />
            <!-- BUTTON -->
            <a href="faq.php"><img src="pics/faq_button.jpg" border="0" /></a>
            
            
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