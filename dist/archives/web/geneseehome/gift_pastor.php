<?php 
// change with each page
$page_id = 'gift_for_pastor';
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
            <img src="pics/pastor_thumb.jpg" width="157" height="139" border="0"/> </td>
            
            <td valign="top" class="header_image" align="left"> <!-- begin HEADER IMAGE td -->
            <img src="pics/gift_for_your_pastor_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
               
               <?php // BEGIN REQUEST FORM TABLE ?>
               
               <form name="request_form" method="post" action="donate_pastor_form_process.php">
               <table class="request_visit_form_table"> 
                	<tr>
                	  <td colspan="2" class="general_form_text" >
                    

<span class="header_bold">Give your Pastor the gift they may need most:</span> <br />
As an active person in your church have you ever struggled with the perfect gift for Pastor appreciation? Have you ever wondered where your Pastor and spouse could go for a time of spiritual renewal? Genesee Home is the solution to both of your questions!
<br /><br />
For as little as $395 you can send your Pastor and their spouse for 5 days and 5 nights to Genesee Home. 
<br /><br />
If your Pastor is like most, they are constantly serving others, work an incredible schedule, are always available and rarely are served themselves. 
<br /><br />
At Genesee Home we want your Pastor and their Spouse to know they are valued and appreciated. Our quiet environment allows them to reconnect with their spouses and God. 
<br /><br />
If you are interested in giving your Pastor this incredible gift, please provide us the information below. 

<br /><br />
Looking to give a gift to a missionary couple instead? <a href="gift_missionaries.php">Click Here</a>.<BR />
<BR />
<br/>
<span class="required_text">* indicates a required field</span>                    </td>
               	  </tr>
                    
                    <tr>
                    <td colspan="2" class="general_form_text">
                  <p><span class="required_text">*&nbsp;</span><b>Please tell us how you heard about Genesee Home.</b> We want to be good stewards of Genesee Home's funds and value your answer to this question so we
can best direct our marketing efforts. <b>Please check all that apply:</b></p>
<table class="how_did_you_hear_table" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="checkbox" name="presentation" value="true">&nbsp;Presentation by GH Directors (Blom's)</td>
<td>
<input type="checkbox" name="brochure" value="true">&nbsp;Genesee Home Brochure</td>
</tr>
<tr>
<td>
<input type="checkbox" name="website" value="true">&nbsp;Genesee Home Website</td>
<td>
<input type="checkbox" name="just_between_us_advert" value="true">&nbsp;Advert in <u>Just Between Us</u> Magazine</td>
</tr>
<tr>
<td>
<input type="checkbox" name="just_between_us_article" value="true">&nbsp;Article in <u>Just Between Us</u> Magazine</td>
<td>
<input type="checkbox" name="raven_ministries" value="true">&nbsp;Raven Ministries</td>
</tr>

<tr>
<td>
<input type="checkbox" name="supervisior_minister" value="true">&nbsp;District Supervisior/Minister</td>
<td>
<input type="checkbox" name="briscoe_postcard" value="true">&nbsp;Jill Briscoe Postcard</td>
</tr>

<tr>
<td>
<input type="checkbox" name="fall_beshore_postcard" value="true">&nbsp;Fall Kenton Beshore Postcard</td>
<td>
<input type="checkbox" name="spring_beshore_postcard" value="true">&nbsp;Spring Kenton Beshore Postcard</td>
</tr>

<tr>
<td colspan="2">
				<table class="how_did_you_hear_table_input" cellpadding="0" cellspacing="0"><tr><td>
				<input type="checkbox" name="personal_ref" value="true">&nbsp;Personal Reference:
				</td>
				<td>
				<input type="text" name="personal_ref_name" value="  please provide name" class="input_text_howhear">				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="other_postcard" value="true">&nbsp;Other postcard:&nbsp;&nbsp;                </td>
                <td>
				<input type="text" name="other_postcard" value="  please provide name" class="input_text_howhear">				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="other" value="true">&nbsp;Other:&nbsp;&nbsp;                </td>
                <td>
				<input type="text" name="other_postcard" value="  please specify" class="input_text_howhear">				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="dont_remember" value="true">&nbsp;I don't remember				</td>
				<td>&nbsp;				</td>
				</tr>
				</table></td>
</table>                   </td>
                   </tr> 
                   
                   
                   <tr><td colspan="2" class="general_form_text"><br />
                   
                   </td></tr> 
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Donor's Name:</td>
                   	  <td class="right_form_col"><input type="text" name="donors_full_name" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Street Address:</td>
                   	  <td class="right_form_col"><input type="text" name="donors_address" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>City:</td>
                   	    <td class="right_form_col"><input type="text" name="donors_city" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>State:</td>
                   	  <td class="right_form_col"><input type="text" name="donors_state" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Zip Code:</td>
                   	    <td class="right_form_col"><input type="text" name="donors_zip" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Donor's Phone:</td>
                   	    <td class="right_form_col"><input type="text" name="donors_phone" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Donor's Email</td>
                   	  <td class="right_form_col"><input type="text" name="full_name" class="input_text"></td>
                	</tr>
                    
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Pastor's Name:</td>
                   	  <td class="right_form_col"><input type="text" name="donee_full_name" class="input_text"></td>
                	</tr>
                	
                      <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Pastor's Spouse:</td>
                   	  <td class="right_form_col"><input type="text" name="donee_spouses_full_name" class="input_text"></td>
                	</tr>
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Church Name:</td>
                   	  <td class="right_form_col"><input type="text" name="donee_spouses_full_name" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Street Address:</td>
                   	  <td class="right_form_col"><input type="text" name="street_address_line" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>City:</td>
                   	  <td class="right_form_col"><input type="text" name="city" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>State:</td>
                   	  <td class="right_form_col"><input type="text" name="state" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Zip Code:</td>
                   	  <td class="right_form_col"><input type="text" name="zip_code" class="input_text"></td>
                	</tr>
                
                <tr>
                    	<td class="left_form_spacer_col" colspan="2">&nbsp;please enter 10-digit phone numbers without spaces or dashes, e.g  5302841082</td>
                	</tr>
                    
                
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Pastor Home Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="home_phone" class="input_text"></td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Pastor Work Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="work_phone" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Pastor Email:</td>
                   	  <td class="right_form_col"><input type="text" name="email" class="input_text"></td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    <tr>
                    	<td class="general_form_text" colspan="2"><span class="subpictext_small">Submission of a request by electronic medium constitutes your acknowledgement.</span> </td>
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
