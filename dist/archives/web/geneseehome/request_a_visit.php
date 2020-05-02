<?php 
// change with each page
$page_id = 'request_a_visit';
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
            <img src="pics/request_a_visit_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text">
            	<?php // NEW TEXT STARTS HERE ?>
               
               <?php // BEGIN REQUEST FORM TABLE ?>
               
               <form name="visitrequest" method="post" action="action="cgi-bin/cgiemail/requestvisit1.txt">
               <table class="request_visit_form_table"> 
                	<tr>
                	  <td colspan="2" class="general_form_text" >
                    Please complete the following electronic form and send it via the &quot;submit&quot; button at the bottom <br />of this page. Alternatively, you may print an application and mail it to us directly, please <a href="requst_visit_printable_form.php">click here</a> for the printable application. <br />
                    <br />
                    <b>Are you returning Alumni of Genesee Home?</b> <br /> - If yes, please make your request via our special <a href="alumni_request.php">Alumni Request Form</a>.
                    <br /><br/>
                    <img src="pics/depositline1.jpg" width="90" height="13"><img src="pics/depositline2.jpg" width="58" height="13" onClick="MM_openBrWindow('deposit_info.php','deposit','width=500,height=250')" ><img src="pics/depositline3.jpg" width="41" height="13"><img src="pics/depositline4.jpg" width="96" height="13" onClick="MM_openBrWindow('cancel_policy.php','cancel','width=500,height=300')">
                    <br />
                    <br/>
<span class="required_text">* indicates a required field</span>
                    
                    </td></tr>
                    
                    <tr>
                    <td colspan="2" class="general_form_text">
                  <p><span class="required_text">*&nbsp;</span><b>Please tell us how you heard about Genesee Home.</b> We want to be good stewards of Genesee Home's funds and value your answer to this question so we
can best direct our marketing efforts. <b>Please check all that apply:</b></p>
<table class="how_did_you_hear_table" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="checkbox" name="directors" value="directors">&nbsp;Presentation by GH Directors (Blom's)
</td>
<td>
<input type="checkbox" name="brochure" value="brochure">&nbsp;Genesee Home Brochure 
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="website" value="website">&nbsp;Genesee Home Website
</td>
<td>
<input type="checkbox" name="ad" value="ad">&nbsp;Advert in <u>Just Between Us</u> Magazine
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="ad2" value="ad">&nbsp;Article in <u>Just Between Us</u> Magazine
</td>
<td>
<input type="checkbox" name="raven" value="raven">&nbsp;Raven Ministries
</td>
</tr>

<tr>
<td>
<input type="checkbox" name="district" value="district">&nbsp;District Supervisior/Minister
</td>
<td>
<input type="checkbox" name="postcard_womens_group" value="true">&nbsp;Postcard to Women’s Group
</td>
</tr>

<tr>
<td>
<input type="checkbox" name="postcard_board_of_church" value="true">&nbsp;Postcard to Board of Church
</td>
<td>&nbsp;

</td>
</tr>

<tr>
<td colspan="2">
				<table class="how_did_you_hear_table_input" cellpadding="0" cellspacing="0"><tr><td>
				<input type="checkbox" name="personalreference" value="personalreference">&nbsp;Personal Reference:
				</td>
				<td>
				<input type="text" name="personal_ref_name" value="  please provide name" class="input_text_howhear">
				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="other_postcard" value="true">&nbsp;Other postcard:&nbsp;&nbsp;
                </td>
                <td>
				<input type="text" name="other_postcard" value="  please provide name" class="input_text_howhear">
				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="otherheardtext2" value="otherheardtext2">&nbsp;Other:&nbsp;&nbsp;
                </td>
                <td>
				<input type="text" name="other_postcard" value=" please specify" class="input_text_howhear">
				</td>
				</tr>
                <tr>
				<td>
				<input type="checkbox" name="dont_remember" value="true">&nbsp;I don't remember
				</td>
				<td>&nbsp;
				
				</td>
				</tr>
				</table>
</td>


</table>

                   </td>
                   </tr> 
                   
                   
                   <tr><td colspan="2" class="general_form_text"><br />
                   
                   </td></tr> 
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Your Full Name:</td>
                   	  <td class="right_form_col"><input type="text" name="name" class="input_text"></td>
                	</tr>
                	
                      <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Spouse's Full Name:</td>
                   	  <td class="right_form_col"><input type="text" name="spouse" class="input_text"></td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Anniversary Date:</td>
                   	  <td class="right_form_col">
                      
                      <select name="yearsmarried" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="yearsmarried2" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="yearsmarried3" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=1900;$i<2008;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>                     </td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Husband's Birthdate:</td>
                   	  <td class="right_form_col">
                      
                      <select name="husbandbday" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="husbandbday2" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="husbandbday3" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=1900;$i<2008;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>                     </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Wife's Birthdate:</td>
                   	  <td class="right_form_col">
                      
                      <select name="wifebday" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wifebday2" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wifebday3" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=1900;$i<2008;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>                     </td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Size of Family:</td>
                   	  <td class="right_form_col"><input type="text" name="sizeoffamily" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Street Address:</td>
                   	  <td class="right_form_col"><input type="text" name="street" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>City:</td>
                   	  <td class="right_form_col"><input type="text" name="city" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>State:</td>
                   	  <td class="right_form_col"><input type="text" name="state" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Zip Code:</td>
                   	  <td class="right_form_col"><input type="text" name="zip" class="input_text"></td>
                	</tr>
                
                <tr>
                    	<td class="left_form_spacer_col" colspan="2">&nbsp;please enter 10-digit phone numbers without spaces or dashes, e.g  5302841082</td>
                	</tr>
                    
                
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Home Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="homephone" class="input_text" maxlength="15"></td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Work Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="workphone" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Email:</td>
                   	  <td class="right_form_col"><input type="text" name="email" class="input_text"></td>
                	</tr>
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Confirm Email:</td>
                   	  <td class="right_form_col"><input type="text" name="confirm_email" class="input_text"></td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span> Church/Ministry Name:</td>
                   	  <td class="right_form_col"><input type="text" name="churchname" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Average Attendance:</td>
                   	  <td class="right_form_col"><input type="text" name="weekendattendance" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Denomination:</td>
                   	  <td class="right_form_col"><input type="text" name="denomination" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Year of Ordination:</td>
                   	  <td class="right_form_col"><input type="text" name="yearofordination" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Your Position:</td>
                   	  <td class="right_form_col"><input type="text" name="yourposition" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col" valign="top"><span class="required_text">*&nbsp;</span>Descrition of your Ministry:</td>
                   	    <td class="right_form_col"><textarea name="description" class="input_text_multiline" rows="1" cols="1"></textarea></td>
                	</tr>
                    
                    
                      <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col" valign="top"><span class="not_required_text">*&nbsp;</span>Special Needs:<br />
                        <span class="form_subtext">Food allergies, diabetic, vegetarian, etc, please explain fully.</span></td>
                   	    <td class="right_form_col"><textarea name="specialfood" class="input_text_multiline" rows="1" cols="1"></textarea></td>
                	</tr>
                    <tr>
                    	<td class="left_form_col" valign="top"><span class="not_required_text">*&nbsp;</span>Other Special Needs:<br />
                        <span class="form_subtext">Please explain anything that may help us accomodate any special needs.</span></td>
                   	    <td class="right_form_col"><textarea name="otherspecial" class="input_text_multiline" cols="1" rows="1"></textarea></td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Emergency Contact Name:</td>
                   	  <td class="right_form_col"><input type="text" name="emergencycontact" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Contact's Phone Number:</td>
                   	  <td class="right_form_col"><input type="text" name="emergencyphone" class="input_text"></td>
                	</tr>
                
                 <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="general_form_text" colspan="2">
<p><b>Genesee Home Calendar</b></p>

<p><span class="form_subtext_dark">When the calendar indicates 1 or 2 rooms available these are usually our queen bedrooms: Garden and Hosselkus. All other dates that are open will have at least three rooms available. Please call to be put on our waiting list.</span></p>



<?php include_once("includes/genesee_calendar.php"); ?>

<br />
<span class="special_alumni_week">** Special Alumni Week</span></td>
                	</tr>
                    
                     <tr>
                     <td colspan="2">
                     <br />
                     <p><b>PREFERRED DATES:</b> Please choose 3 dates in order of preference and we'll make every effort to accomodate your first choice, but would like to respond with others if it is unavailable. <b>All dates are Sunday - Friday.</b></p>

<p><b>Please note:</b> You should plan to arrive after 3:00 PM on Sunday afternoon and before 6:00- PM and depart after 11:00 AM on the following Friday.</p>

<p>A determination email will be sent within 48 hours of our receipt of your request.</p>
<br/>
                     
                     </td>
                     
                     </tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>1st Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="firstdate" class="input_text_month_calendar_dates">
                      		<option value="0" selected>Select 1st choice</option>
					     <option value="7/6/2008" selected>7/6/2008</option>

                      <option value="8/3/2008">8/3/2008</option>
                      <option value="8/10/2008">8/10/2008</option>
                      <option value="8/31/2008">8/31/2008</option>
                      <option value="9/7/2008">9/7/2008</option>
                      <option value="9/14/2008">9/14/2008</option>
                      <option value="9/21/2008">9/21/2008</option>

                      <option value="9/28/2008">9/28/2008</option>
                      <option value="10/5/2008">10/5/2008</option>
                      <option value="10/12/2008">10/12/2008</option>
                      <option value="10/19/2088">10/19/2008</option>
                      <option value="10/26/2008">10/26/2008</option>
                      <option value="11/2/2008">11/2/2008</option>

                      <option value="11/9/2008">11/9/2008</option>
                      <option value="11/16/2008">11/16/2008</option>
                      <option value="11/30/2008">11/30/2008</option>
                      <option value="12/7/2008">12/7/2008</option>
                      <option value="12/14/2008">12/14/2008</option>
                      </select>
               </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>2nd Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="2ndate" class="input_text_month_calendar_dates">
                     
					
                      		<option value="0" selected>Select 2nd choice</option>
					     <option value="7/6/2008" selected>7/6/2008</option>

                      <option value="8/3/2008">8/3/2008</option>
                      <option value="8/10/2008">8/10/2008</option>
                      <option value="8/31/2008">8/31/2008</option>
                      <option value="9/7/2008">9/7/2008</option>
                      <option value="9/14/2008">9/14/2008</option>
                      <option value="9/21/2008">9/21/2008</option>

                      <option value="9/28/2008">9/28/2008</option>
                      <option value="10/5/2008">10/5/2008</option>
                      <option value="10/12/2008">10/12/2008</option>
                      <option value="10/19/2088">10/19/2008</option>
                      <option value="10/26/2008">10/26/2008</option>
                      <option value="11/2/2008">11/2/2008</option>

                      <option value="11/9/2008">11/9/2008</option>
                      <option value="11/16/2008">11/16/2008</option>
                      <option value="11/30/2008">11/30/2008</option>
                      <option value="12/7/2008">12/7/2008</option>
                      <option value="12/14/2008">12/14/2008</option>
                      </select>                   </td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>3rd Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="3rddate" class="input_text_month_calendar_dates">
                      
					    
                      		<option value="0" selected>Select 3rd choice</option>
					     <option value="7/6/2008" selected>7/6/2008</option>

                      <option value="8/3/2008">8/3/2008</option>
                      <option value="8/10/2008">8/10/2008</option>
                      <option value="8/31/2008">8/31/2008</option>
                      <option value="9/7/2008">9/7/2008</option>
                      <option value="9/14/2008">9/14/2008</option>
                      <option value="9/21/2008">9/21/2008</option>

                      <option value="9/28/2008">9/28/2008</option>
                      <option value="10/5/2008">10/5/2008</option>
                      <option value="10/12/2008">10/12/2008</option>
                      <option value="10/19/2088">10/19/2008</option>
                      <option value="10/26/2008">10/26/2008</option>
                      <option value="11/2/2008">11/2/2008</option>

                      <option value="11/9/2008">11/9/2008</option>
                      <option value="11/16/2008">11/16/2008</option>
                      <option value="11/30/2008">11/30/2008</option>
                      <option value="12/7/2008">12/7/2008</option>
                      <option value="12/14/2008">12/14/2008</option>
                      </select>                  </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col" colspan="2">Indicate in the comment box below if your selected dates are of particular importance.</td>
                   	  
                	</tr>
                    
                    
                    <tr>
                    
                    <td colspan="2">
                    	<table class="room_pics_table">
                        	<tr>
                           	  <td colspan="5" class="bedpic_text"><br/>&nbsp;</td>
                                </tr>
                        	<tr>
                           	  <td>
                              <img src="pics/gardenroom_thumb_90.jpg" width="90" height="90" border="0"/>                                </td>
                                <td>
                                <img src="pics/geneseeroom_thumb_90.jpg" width="90" height="90" border="0"/>                                </td>
                              <td>
                                <img src="pics/hosselkussroom_thumb_90.jpg" width="90" height="90" border="0"/>                              </td>
                           
                                <td>
                                <img src="pics/meadowroom_thumb_90.jpg" width="90" height="90" border="0"/>                                </td>
                              <td>
                                <img src="pics/parlorroom_thumb_90.jpg" width="90" height="90" border="0"/>                              </td>
                            </tr>
                            <tr>
                           	  <td align="center" class="bedpic_text" valign="top">
                                <b>Garden Room</b><br />
                                258 ft&sup2;
                              </td>
                                <td align="center" class="bedpic_text" valign="top">
                                 Genesee Room<br />
                                365 ft&sup2;
                                </td>
                                <td align="center" class="bedpic_text" valign="top">
                                 Hosselkus Room<br />
                                321 ft&sup2;
                                </td>
                                <td align="center" class="bedpic_text" valign="top">
                                 Meadow Room<br />
                                426 ft&sup2;
                                </td>
                                <td align="center" class="bedpic_text" valign="top">
                                 Parlor Room<br />
                                417 ft&sup2;
                                </td>
                            </tr>
                        </table> <!-- end room pic table -->
                    </td>
                    </tr>
                       
                       
                       <tr>
                       	<td class="general_form_text" colspan="3">
                         <p><b>Please list your 1st, 2nd, and 3rd choice of accommodations.</b>  We will do our best to honor your choice of room; however, rooms are assigned on a &quot;first come-first serve&quot; basis. </p>
                        </td>
                        </tr>
                        
                         
                      <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>1st Room Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="firstchoice" class="input_text_month_calendar_dates">
                      <option value="0" selected>Select 1st Room</option>
					  <option value="Garden">Garden Room</option>
                      <option value="Genesee">Genesee Room</option>
                      <option value="Hosselkus">Hosselkus Room</option>
                      <option value="Meadow">Meadow Room</option>
                      <option value="Parlor">Parlor Room</option>
                      
                     </select>                     </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>2nd Room Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="2ndchoice" class="input_text_month_calendar_dates">
                      <option value="0" selected>Select 2nd room</option>
					  <option value="Garden">Garden Room</option>
                      <option value="Genesee">Genesee Room</option>
                      <option value="Hosselkus">Hosselkus Room</option>
                      <option value="Meadow">Meadow Room</option>
                      <option value="Parlor">Parlor Room</option>
                      
                     </select>                     </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>3rd Room Choice:</td>
                   	  <td class="right_form_col">
                      
                      <select name="3rdchoice" class="input_text_month_calendar_dates">
                      <option value="0" selected>Select 3rd room</option>
					  <option value="Garden">Garden Room</option>
                      <option value="Genesee">Genesee Room</option>
                      <option value="Hosselkus">Hosselkus Room</option>
                      <option value="Meadow">Meadow Room</option>
                      <option value="Parlor">Parlor Room</option>
                      
                     </select>                     </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col" colspan="2">Indicate in the comment box below if your selected rooms are of particular importance.</td>
                   	  
                	</tr>
                   
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3">Do you intend to coordinate your visit with any other individuals?
                        &nbsp;&nbsp;
                        Yes<input type="radio" name="coordinate" value="yes">&nbsp;&nbsp;
                        No<input type="radio" name="coordinate" value="no" checked>&nbsp;&nbsp;
                        </td>
                   	  
                	</tr> 
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>If Yes, Provide Name:</td>
                   	  <td class="right_form_col"><input type="text" name="friendsname" class="input_text"></td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3">How will you be traveling to Genesee Home?
                        &nbsp;&nbsp;
                        By Car<input type="checkbox" name="transporation" value="driving">&nbsp;&nbsp;
                        By Plane<input type="checkbox" name="transportation" value="by air">&nbsp;&nbsp;
                        </td>
                   	  
                	</tr> 
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr> 
                      
                      
                      <tr>
                    	<td class="general_form_text" colspan="3">
                        <p><b>SCHOLARSHIP OPPORTUNITIES</b></p>
                        <p> The Board of Genesee Home offers limited scholarship help for couples who need assistance in visiting Genesee Home. <span class="empha_text">By clicking the following checkbox, any information currenly recorded in this form will be submitted to us electronically via the submit button at the bottom of the page, afterwhich you will be forwarded to the Scholarship Request Form to complete your scholarship application.</span> 
                        </td>
                   	  
                	</tr>
                      
                      <tr>
                    	<td class="form_question" colspan="3">
                       
                        <input type="checkbox" name="yesscholarship" value="yes">&nbsp;&nbsp;
                        Yes, after I submit this form I would like to apply for a scholarship.
                        </td>
                   	  
                	</tr>
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3"><span class="required_text">*&nbsp;</span>Please briefly describe your Sabbath week desires at Genesee Home:
                        </td>
                   	  
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3">
                        <textarea class="full_question_box" name="accomplish" cols="1" rows="1"></textarea>
                        
                        </td>
                   	  
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3"><span class="not_required_text">&nbsp;</span>Comments:
                        </td>
                   	  
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3">
                        <textarea class="full_question_box" name="comments" cols="1" rows="1"></textarea>
                        
                        </td>
                   	  
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    <tr>
                    	<td class="general_form_text" colspan="3">
                        <p><b>We are unable to accommodate children or pets.</b> A visit to Genesee Home is not intended to be a vacation; it is a restful setting where you and your spouse can be refreshed, restored and renewed through time alone, time with God and interaction with each other.</p>
                       
                        
                        <p><b>Before you submit your request</b>, please read and acknowledge your agreement with our <a href="statement_of_faith.php" target="_blank">Statement of Faith</a>. <span class="subpictext_small">(link opens a new window so you will not lose any entered data on this form)</span></p>
                        </td>
                   	  
                	</tr>
                     
                     <tr>
                    	<td class="form_question" colspan="3">
                       
                        <input type="checkbox" name="user_agreement" value="true">&nbsp;&nbsp;
                        Yes, I agree with Genesee Home's Statement of Faith.
                        </td>
                   	  
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col" colspan="1"><span class="required_text">*&nbsp;</span>Please Initial:</td>
                   	  <td class="right_form_col"><input type="text" name="agreewithstatement" class="input_text" maxlength="50"></td>
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
                        <input type="submit" name="submit_button" class="submit_button" value="Submit Request">
                        </td>
                   	  
                	</tr>
                    
                    
                    
                </table><?php // END REQUEST FORM TABLE ?>
               </form>
            
            <br /><br /><br /><br />
            <!-- BUTTON -->
            
        
            	<?php // NEW TEXT ENDS HERE ?>            </td>
        </tr> <!-- end TR for row 1 -->
        
        <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
        
        
        
        
        
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
