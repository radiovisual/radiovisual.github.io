<?php 
// change with each page
$page_id = 'host_couple';
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
      
      <table class="center_table"><tr><td><img src="pics/host_couple_pic.jpg" width="400" height="383" border="0" /></td></tr>
         <tr><td> 
          
          <p>We would like you to meet our Host Couple, Charley and Bev Blom, who serve full time at Genesee Home and will help to make your stay comfortable.</p><p>
Charley and Bev Blom, have spent the last 34 years in full time Christian ministry.</p><p>
For 22 years they pastored churches in Colorado, South Dakota, and Wisconsin. They have also served three different churches as an intentional Interim pastor, in Montana and Illinois.</p><p>
They will celebrate 36 years of marriage this June. During those years, they raised two children. Their children have each married and now they are proud grandparents of eight wonderful grandchildren!</p><p>
For the last eleven years they have ministered to full time Christian workers, their spouses and families. They spent four of those years in full time service living at a Christian Retreat for Pastors and spouses. They have been leading and ministering at Genesee Home for the last five years.</p><p>
Their experience has taken them from small rural to large city churches, from single staff to multiple staff situations. With skills in Biblical Counseling, Spiritual Direction, and Christian Life Coaching they are able to listen, encourage and guide full time servants of Christ.</p><p>
One pastor said, "Anyone who knows Charley & Bev can see their heart's desire and gifts lie in caring for Pastors."</p>

<p><b>Contact <a href="mailto:ministrydirector@geneseehome.org">Charley</a> or <a href="mailto:hospitalitydirector@geneseehome.org">Bev</a></b></p></td></tr></table>


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
