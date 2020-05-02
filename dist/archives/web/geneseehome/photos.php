<?php 
// change with each page
$page_id = 'photo_gallery';

$gallery_frame_width = 600;
$gallery_frame_height = 450 + 26 // 26 = close button;


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
       
       
       
       <div id="contextSensitiveTable1">
       <!--- BEGIN TABLE TO HOLD ALL THE CONTEXT SENSITIVE DATA -->
       <table cellpadding="0" cellspacing="0" border="0" width="630"> <!-- begin context sensitive table -->
       	
        <!-- CFH  -->
        <tr>
        	<td valign="top" > &nbsp;<!-- begin HEADER IMAGE td --></td>
        </tr> <!-- end IMAGES TR -->
        
        <tr> <!-- begin INFO TR -->
        	<td valign="top" height="316" class="center_image" align="center">
            	<?php // NEW TEXT STARTS HERE ?>
      
      <table class="photo_gallery_table">
      	<tr>
        	<td valign="top"><img src="pics/genesee_general_thumb.jpg"></td>
            <td class="header_image" valign="top"><img src="pics/photo_gallery_header.jpg">
            <br />
            
            <br />
            <span class="infoTD_text1">click to jump to the different sections: </span><br /><br />
           
            <a href="#GenesseHome" >&bull;&nbsp;Genesee Home</a><br/>
            <a href="#GenesseValley" >&bull;&nbsp;Genesee Valley</a><br/>
            <a href="#Garden" >&bull;&nbsp;Garden Bedroom</a><br/>
             <a href="#Genesse" >&bull;&nbsp;Genesse Bedroom</a><br/>
            <a href="#Hosselkuss" >&bull;&nbsp;Hosselkuss Bedroom</a><br/>
            <a href="#Meadow">&bull;&nbsp;Meadow Bedroom</a><br/>
            <a href="#Parlor">&bull;&nbsp;Parlor Bedroom</a><br/>
            <br/>
            
            <br /><br />
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         <?php // BEGIN GENERAL SECTION ?>
         <tr>
       
        	<td valign="top"><img src="pics/genesee_general_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
            Renovated Victorian Ranch<br/>
            Built in 1880<br/>
           5 Bedrooms<br/>
            5.5 Bathrooms<br/>
            </span>
            
            
             
            </td>
            
            <td class="header_image" valign="top"><a name="GeneseeHome" class="nameTag"></a><img src="pics/general_photos_header.jpg">  
           
           
            
           
           
            
            <table class="thumbnail_table" cellspacing="8">
            
            <?php // COPY FROM HERE ?>
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    
                    <img src="pics/gallery_thumbs/General/100_0097.jpg" 
                    onClick="MM_openBrWindow('gallery_frame.php?id=General/100_0097.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/100_0102.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/100_0102.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')"/>                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/100_0103.jpg"  
                    onClick="MM_openBrWindow('gallery_frame.php?id=General/100_0103.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/100_0376.jpg"  
                    onClick="MM_openBrWindow('gallery_frame.php?id=General/100_0376.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/dining_best.jpg"   
                    onClick="MM_openBrWindow('gallery_frame.php?id=General/dining_best.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/General/diningroomset1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/diningroomset1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                   </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/DSC_0007.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/DSC_0007.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                  </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/DSC_0010.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/DSC_0010.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                     </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/DSC_0078.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/DSC_0078.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                   </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/DSC_0129.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/DSC_0129.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                 </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/General/Genesee-Home.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/Genesee-Home.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/parlor2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/parlor2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/parlor6.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/parlor6.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/parlor7.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/parlor7.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/General/parlor_best.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/parlor_best.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                 <tr>
                	<td>
                    <img src="pics/gallery_thumbs/General/upperhall.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=General/upperhall.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                 
                 <?php // COPY TO HERE ?>
                
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td><br /><br /></td></tr>
         <?php // END GENERAL SECTION ?>
         
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         
         
         <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
         
        	<td valign="top"><img src="pics/genesee_valley_thumb.jpg">
            
            <a href="history.php" class="infoTD_text">Genesee Valley History</a>
            
            
             
            </td>
            <td class="header_image" valign="top"><a name="GenesseValley" class="nameTag" ></a><img src="pics/genesee_valley_header.jpg">
            
            
           
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/4view from pond1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/4view from pond1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_0097.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_0097.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_0099.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_0099.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_0185.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_0185.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_1090.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_1090.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_1139.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_1139.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/100_2430.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/100_2430.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC00921.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC00921.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC03600.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC03600.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC03612.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC03612.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC03613.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC03613.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_0004.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_0004.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_0012.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_0012.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_00041.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_00041.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_0093.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_0093.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_0106.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_0106.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_00541.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_00541.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_004111.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_004111.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSC_0010234.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSC_0010234.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/DSCF0828.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/DSCF0828.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/fall12.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/fall12.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/GeneseeHomeElkGrove.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/GeneseeHomeElkGrove.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/hike1111032.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/hike1111032.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/hike11110318.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/hike11110318.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/lupine11.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/lupine11.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/mrtwister1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/mrtwister1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/P1010067.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/P1010067.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/P1010070.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/P1010070.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/P8270025.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/P8270025.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/P8270035.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/P8270035.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />         </td>
                </tr>
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GeneseeValley/PICT0002.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/PICT0002.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/PICT0004.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/PICT0004.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GeneseeValley/senic8160311.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GeneseeValley/senic8160311.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
         
         
         
         
         
         
         
         
         <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
         
        	<td valign="top"><img src="pics/garden_bedroom_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
             258 square feet<br/>
             Full bath and shower<br/>
			Queen sized bed<br/>
			Location: Upstairs<br/><br/>
			View: West valley/ mountains<br/>
			
            </span>
            
            
             
            </td>
            <td class="header_image" valign="top"><a name="Garden" class="nameTag"></a><img src="pics/garden_bedroom_header.jpg">
            
            
            <span class="photo_infoTD_text">
         
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm1.jpg','frame','width=450,height=600')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm3.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm3.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm4.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm4.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm5.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm5.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                <tr>
                	<td>
                    <img src="pics/gallery_thumbs/GardenBedroom/gardenbdrm6.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GardenBedroom/gardenbdrm6.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
          <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
        
        	<td valign="top"><img src="pics/genesee_bedroom_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
             365 square feet<br/>


Full bath and shower<br/>
Sitting Area<br/> 
King sized bed<br/>
Location: Upstairs<br/><br/>
View: Garden Landscape
			
            </span>
            
            
             
            </td>
            <td class="header_image" valign="top"><a name="Genesse" class="nameTag"></a><img src="pics/genesee_bedroom_header.jpg">
             
            <br />
            <span class="photo_infoTD_text">
          
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/GenesseBedroom/geneseebdrm2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GenesseBedroom/geneseebdrm2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GenesseBedroom/geneseebdrm1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GenesseBedroom/geneseebdrm1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GenesseBedroom/geneseebdrm5.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GenesseBedroom/geneseebdrm5.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GenesseBedroom/geneseebdrm3.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GenesseBedroom/geneseebdrm3.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/GenesseBedroom/geneseebdrm6.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=GenesseBedroom/geneseebdrm6.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                <tr>
                	<td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
         
         
         <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
         
        	<td valign="top"><img src="pics/hosselkuss_bedroom_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
             321 square feet<br />
             
Bath: Shower only<br />
Queen sized bed<br />
Semi-private Sitting Room<br />
Location: Upstairs<br /><br />
			
            View: <br />
             West valley & mountains<br /> 
            Downtown Genesee<br />
            Northern Mountain Range
            </span>
            
            
            
            </td>
            <td class="header_image" valign="top"><a name="Hosselkuss" class="nameTag"></a><img src="pics/hosselkuss_bedroom_header.jpg">
            
            <br />
            <span class="photo_infoTD_text">
            
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/hbedroom/hosselbdrm1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=hbedroom/hosselbdrm1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/hbedroom/hosselbdrm2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=hbedroom/hosselbdrm2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/hbedroom/hosselbdrm3.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=hbedroom/hosselbdrm3.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/hbedroom/hosselbdrm4.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=hbedroom/hosselbdrm4.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/hbedroom/upstairs_hallway.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=hbedroom/upstairs_hallway.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                <tr>
                	<td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
         
         
         
         <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
         
        	<td valign="top"><img src="pics/meadow_bedroom_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
              426 square feet<br/>


Bath: Full bath and shower<br/>
King sized bed<br/>
Sitting area<br/>
Location: Upstairs<br/><br/>

View:<br/> 
Meadow<br/> 
South mountain range<br/>
<i>best view in the house</i><br/>
            </span>
            
            
            
            </td>
            <td class="header_image" valign="top"> <a name="Meadow" class="nameTag"></a><img src="pics/meadow_bedroom_header.jpg">
           
            <br />
            <span class="photo_infoTD_text">
            
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/MeadowBedroom/meadowbdrm1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=MeadowBedroom/meadowbdrm1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/MeadowBedroom/meadowbdrm2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=MeadowBedroom/meadowbdrm2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/MeadowBedroom/meadowbdrm3.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=MeadowBedroom/meadowbdrm3.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/MeadowBedroom/PICT0020.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=MeadowBedroom/PICT0020.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/MeadowBedroom/PICT0021.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=MeadowBedroom/PICT0021.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                </tr>
                
                <tr>
                	<td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
         
  
  
  <?php // BEGIN GARDEN BEDROOM SECTION ?>
         <tr>
         
        	<td valign="top"><img src="pics/parlor_bedroom_thumb.jpg">
            <span class="photo_gallery_quick_facts">
            <b>General Facts</b> <br/>
               417 square feet<br/>

King sized bed<br/>
Bath: Bath/shower combination<br/>
Sitting area<br/>
Wood burning fireplace<br/>
Location: Downstairs<br/><br/>
View: Garden landscape<br/>
            </span>
            
            
            
            </td>
            
            <td class="header_image" valign="top"><a name="Parlor" class="nameTag"></a><img src="pics/parlor_bedroom_header.jpg">
            
            <br />
            <span class="photo_infoTD_text">
           
            
            <table class="thumbnail_table" cellspacing="8">
            
      
            <tr><td colspan="5"> <span class="click_any_image">click any image for a larger view:</span></td></tr>
            	<tr>
                	<td>
                    <img src="pics/gallery_thumbs/ParlorBedroom/Parlorbdrm1.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=ParlorBedroom/Parlorbdrm1.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/ParlorBedroom/parlorbdrm2.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=ParlorBedroom/parlorbdrm2.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/ParlorBedroom/parlorbdrm3.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=ParlorBedroom/parlorbdrm3.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>
                    <img src="pics/gallery_thumbs/ParlorBedroom/PICT0017.jpg" onClick="MM_openBrWindow('gallery_frame.php?id=ParlorBedroom/PICT0017.jpg','frame','width=<?php echo $gallery_frame_width; ?>,height=<?php echo $gallery_frame_height; ?>')" />                    </td>
                    <td>&nbsp;</td>
                </tr>
                
                <tr>
                	<td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                
                  
                 
                <tr><td><br /><br /></td></tr>
                 </table ><?php // END THUMBNAIL TABLE ?>
            
            </td>
         </tr>
         <tr><td class="horz_rule" colspan="2">&nbsp;</td></tr> <!-- horizontal rule -->
         
         
         <?php // COPY TO HERE FOR GALLERY SECTION ?>
         
         
         
         
         
                
         
         
         
         
         
         
         
         
         
         
         
         
         
        </table><?php // END PHOTO GALLERY TABLE ?>


            <br />
            <!-- BUTTON -->
            
            <?php 
			// EASY CODE FOR A BUTTON IF YOU WANT
            // <a href="faq.php"><img src="pics/faq_button.jpg" border="0" /></a> 
            ?>
            <!-- END BUTTON -->
            	<?php // NEW TEXT ENDS HERE ?>            </td>
        </tr> <!-- end TR for row 1 -->
        
        
        
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
