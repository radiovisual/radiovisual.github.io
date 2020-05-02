<?php 
// change with each page
$page_id = 'scholarship_request';
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
            <img src="pics/scholarship_application_header.jpg" width="468" height="37" border="0"/>            </td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="infoTD_text1">
            	<?php // NEW TEXT STARTS HERE ?>
               
               <?php // BEGIN REQUEST FORM TABLE ?>
               
              <form name="request_form" method="post" action="scholarship_form_process.php">
               <table class="request_visit_form_table"> 
                	<tr>
                	  <td colspan="2" class="general_form_text" >
                     <p>It is our desire that all those who want to participate in the Genesee Home experience have the opportunity to do so regardless of their financial position.</p><p>
Therefore, for individuals who require some financial assistance, the Genesee Home Board has established an annual scholarship budget to supplement the cost of visiting Genesee Home. The Board has also established the policy that scholarships will only be approved for no more than half (50%) of the current guest fee.</p><p>
We encourage anyone who has a need for assistance to request a scholarship when completing their request for a visit.
</p>
<p><b>Please read the following carefully before submitting this application:</b></p>
	<ol>
   <li>All requests for scholarships will be reviewed by the Directors of Genesee Home. The process may take approximately 2 weeks from receipt of a completed request form. </li>
   <li>We request a potential recipient first go to their church for financial aid before he/she requests a scholarship. </li>
   <li>The Scholarship is a gift and not a loan. A recipient is not obligated to return or "pay back" any financial assistance provided. A recipient may donate money to Genesee Home at some later date if he/she desires. </li>
       </ol>             <br/>
<span class="required_text">* indicates a required field</span>
                    
                    </td></tr>
                    
                    
                   
                   
                   <tr><td colspan="2" class="general_form_text">
                   
                   </td></tr> 
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Your Full Name:</td>
                   	  <td class="right_form_col"><input type="text" name="full_name" class="input_text"></td>
                	</tr>
                	<tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Your Birthdate:</td>
                   	    <td class="right_form_col">
                      
                      <select name="birthdate" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wife_date_day" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wife_date_year" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=1900;$i<2008;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>                     </td>
                	</tr>
                    
                     
                    
                    
                    
                    
                    
                    
                     
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Street Address:</td>
                   	  <td class="right_form_col"><input type="text" name="street_address_line" class="input_text"></td>
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
                   	  <td class="right_form_col"><input type="text" name="zip_code" class="input_text"></td>
                	</tr>
                
                <tr>
                    	<td class="left_form_spacer_col" colspan="2">&nbsp;please enter 10-digit phone numbers without spaces or dashes, e.g  5302841082</td>
                	</tr>
                    
                
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Home Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="home_phone" class="input_text"></td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Work Phone:</td>
                   	  <td class="right_form_col"><input type="text" name="work_phone" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Email:</td>
                   	  <td class="right_form_col"><input type="text" name="email" class="input_text"></td>
                	</tr>
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Best Time To Be Reached:</td>
                   	  <td class="right_form_col"><input type="text" name="best_time_to_be_reached" class="input_text"></td>
                	</tr>
                    
                    
                     <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                  
                    
                    <tr>
                    	<td class="form_question" colspan="3"><br /><span class="required_text">*&nbsp;</span>Please summarize the reason for your scholarship request (be specific):
                        </td>
                   	  
                	</tr> 
                    
                    <tr>
                    	<td class="form_question" colspan="3">
                        <textarea class="full_question_box" name="reasons_for_scholarship" cols="1" rows="1"></textarea>
                        
                        </td>
                   	  
                	</tr>
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Marital Status:</td>
                   	    <td class="right_form_col">
                      
                      <select name="first_room_choice" class="input_text_month_calendar_dates">
                      <option value="0" selected>Select...</option>
					  <option value="Married">Married</option>
                      <option value="Engaged">Engaged</option>
                      <option value="Single">Single</option>
                      <option value="Seperated">Seperated</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Widowed">Widowed</option>
                      
                     </select>                     </td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Spouse's Full Name:</td>
                   	  <td class="right_form_col"><input type="text" name="spouses_full_name" class="input_text"></td>
                	</tr>
                	<tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Spouse's  Birthdate:</td>
                   	    <td class="right_form_col">
                      
                      <select name="spouses_birthdate" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wife_date_day" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="wife_date_year" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=1900;$i<2008;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>                     </td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span># of children living at home:</td>
                   	  <td class="right_form_col"><input type="text" name="spouses_full_name" class="input_text"></td>
                	</tr>
                    
                    
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span> Church/Ministry Name:</td>
                   	  <td class="right_form_col"><input type="text" name="church_name" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Average Attendance:</td>
                   	  <td class="right_form_col"><input type="text" name="average_attendance" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Denomination:</td>
                   	  <td class="right_form_col"><input type="text" name="denomination" class="input_text"></td>
                	</tr>
                    
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Your Position:</td>
                   	  <td class="right_form_col"><input type="text" name="position" class="input_text"></td>
                	</tr>
                    
                    
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Church's Street Address:</td>
                   	    <td class="right_form_col"><input type="text" name="church_street_address_line" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Church's City:</td>
                   	    <td class="right_form_col"><input type="text" name="church_city" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Church's State:</td>
                   	  <td class="right_form_col"><input type="text" name="church_state" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Church's Zip Code:</td>
                   	  <td class="right_form_col"><input type="text" name="church_zip_code" class="input_text"></td>
                	</tr>
                    
                    
                    
                    
                    
                    
                      <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    
                    <tr>
                    	<td class="form_question" colspan="3">Have you previously applied for a Scholarship with us? 
                        &nbsp;&nbsp;
                        Yes
                        <input type="radio" name="previously_applied" value="true">&nbsp;&nbsp;
                        No<input type="radio" name="previously_applied" value="false" checked>&nbsp;&nbsp;
                        </td>
                   	  
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>If Yes, When?:</td>
                   	    <td class="right_form_col"><input type="text" name="previously_applied_when" class="input_text"></td>
                	</tr> 
                    
                    
                      <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                     <tr>
                    	<td class="form_question" colspan="3">Has your church been notified of your desire to visit us?&nbsp;&nbsp;
                        Yes<input type="radio" name="church_been_notified" value="true">&nbsp;&nbsp;
                        No<input type="radio" name="church_been_notified" value="false" checked>&nbsp;&nbsp;</td>
                        
                        </tr>
                        <tr>
                        <td class="form_question" colspan="3">Are they able/willing to help?&nbsp;&nbsp;
                        Yes<input type="radio" name="willing_to_help" value="true">&nbsp;&nbsp;
                        No<input type="radio" name="willing_to_help" value="false" checked>&nbsp;&nbsp;</td>
                   	  
                	</tr> 
                    
                    <tr>
                        <td class="form_question" colspan="3"><br />** If No, please explain why:</td>
                   	  
                	</tr> 
                    
                    
                    
                    
                    <tr>
                    	<td class="form_question" colspan="3">
                        <textarea class="full_question_box" name="comments" cols="1" rows="1"></textarea>
                        
                        </td>
                   	  
                	</tr>
                    
                    <tr>
                    <td class="general_form_text" colspan="2">
                   
                    <p><b>** Please have a member of your Church Board acknowledge inability to provide financial assistance by email or letter to <a href="ministrydirector@geneseehome.org">Charley Blom</a>, Ministry Director of Genesee Home.</b></p>
                    
                    </td>
                    </tr>
                    
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Present Employer:</td>
                   	  <td class="right_form_col"><input type="text" name="present_employer" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Employment Date:</td>
                   	  <td class="right_form_col">
                      
                      
                      <select name="employment_date_mon_from" class="input_text_month_select2n1">
                      <option value="0" selected>Mon.</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="employment_date_year_from" class="input_text_month_select2n1">
                      <option value="0" selected class="form_option_selected">Yr.</option>
					  <?php 
					  	for ($i=2008;$i>1900;$i--){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>&nbsp;&nbsp;TO &nbsp;&nbsp;  <select name="employment_date_mon_to" class="input_text_month_select2n1">
                      <option value="0" selected>Mon.</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="employment_date_year_to" class="input_text_month_select2n1">
                      <option value="0" selected class="form_option_selected">Yr.</option>
					  <?php 
					  	for ($i=2008;$i>1900;$i--){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                      
                      </td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Employer Phone:</td>
                   	    <td class="right_form_col"><input type="text" name="employer_phone" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col" valign="top"><span class="not_required_text">*&nbsp;</span>Job Description:<br />
                        </td>
                   	    <td class="right_form_col"><textarea name="job_description" class="input_text_multiline" rows="1" cols="1"></textarea></td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col" colspan="2">
&nbsp;If Employer's Address is different from Church Address please fill in below:</td></tr>



                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Work Address:</td>
                   	    <td class="right_form_col"><input type="text" name="church_street_address_line" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>City:</td>
                   	    <td class="right_form_col"><input type="text" name="church_city" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>State:</td>
                   	  <td class="right_form_col"><input type="text" name="church_state" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Zip Code:</td>
                   	  <td class="right_form_col"><input type="text" name="church_zip_code" class="input_text"></td>
                	</tr>
            
                
                 <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>My Monthly Income: ( $ )</td>
                   	    <td class="right_form_col"><input type="text" name="church_street_address_line" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Spouce's Monthy Income:</td>
                   	    <td class="right_form_col"><input type="text" name="church_city" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Other Income:</td>
                   	  <td class="right_form_col"><input type="text" name="church_state" class="input_text"></td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col" valign="top"><span class="not_required_text">*&nbsp;</span>Sources of Other Income:<br />
                        </td>
                   	    <td class="right_form_col"><textarea name="job_description" class="input_text_multiline" rows="1" cols="1"></textarea></td>
                	</tr>
                    
                    
               <tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Total Monthy Income:</td>
                   	  <td class="right_form_col"><input type="text" name="church_zip_code" class="input_text"></td>
                	</tr>
            
                
                 <tr>
                    	<td class="left_form_spacer_col">&nbsp;</td>
                   	  <td class="right_form_spacer_col">&nbsp;</td>
                	</tr>
                    
                    
                    
                    
                    <tr>
                    	<td class="general_form_text" colspan="2">
<span class="empha_text">MY (OUR) AGREEMENT WITH GENESEE HOME:</span>


<p>I (we) have read and understand the Genesee Home Scholarship Application Guidelines. I (we) am (are) willing to accept financial aid as a gift and understand that repayment is not necessary nor expected.</p>

<p>I (we) understand that the Genesee Home Scholarship Committee will review our application but does not make any representations or warranties with respect to the results of their financial assistance.</p>

<p>I (we) further agree to indemnify and hold harmless all staff and/or volunteers of Genesee Home, and its employees, agents, counselors, consultants, officers, and directors from any claim, suit, action, demand, or liability of any kind and any nature arising out of or in any manner connected with my (our) participation in these services.</p>

<p>I (we) hereby certify that the answers and other information on this application are true and correct and that I (we) understand any misrepresentation or omission of facts on my (our) part will disqualify me (us) from any scholarship assistance.</p>

</td>
                	</tr>
                    
                    <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Pastor:</td>
                   	  <td class="right_form_col"><input type="text" name="pastor_signature" class="input_text"></td>
                	</tr>
                     <tr>
                    	<td class="left_form_col"><span class="required_text">*&nbsp;</span>Spouse:</td>
                   	  <td class="right_form_col"><input type="text" name="spouse_signature" class="input_text"></td>
                	</tr>
                	<tr>
                    	<td class="left_form_col"><span class="not_required_text">*&nbsp;</span>Date:</td>
                   	    <td class="right_form_col">
                      
                      <select name="signed_month" class="input_text_month_select">
                      <option value="0" selected>Month</option>
					  <?php 
					  	for ($i=1;$i<13;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="signed_day" class="input_text_month_select">
                      <option value="0" selected>Day</option>
					  <?php 
					  	for ($i=1;$i<32;$i++){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select>
                     
                      <select name="signed_year" class="input_text_month_select">
                      <option value="0" selected class="form_option_selected">Year</option>
					  <?php 
					  	for ($i=2008;$i>1900;$i--){
					  	echo "<option value=\"{$i}\">{$i}</option>";}
					  ?>
                     </select> 
                     
                 
                                         </td>
                	</tr>
                    
                    
                    <tr>
                    	<td class="left_form_spacer_col" colspan="2">
&nbsp;(If married, husband and wife must sign for this application to be processed)</td></tr>



                    <tr>
                    
                    
                    
                    <tr>
                    	<td class="general_form_text" colspan="2" align="left">
                        <input type="submit" name="submit_button" class="submit_button" value="Submit Request">
                        </td>
                   	  
                	</tr>
                    
                    
                    
                </table><?php // END REQUEST FORM TABLE ?>
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
