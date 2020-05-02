// BEGIN THE CONTROL FOR SCROLLING TO THE 
// INDIVIDUAL SECTIONS:
var nextHash;
var selectedSupporter;
var currentSupporter;
$(document).ready(function(){
	
	$('#photo_video').scrollTop = $('#photo_video').scrollHeight;
	$('#social_media').scrollTop = $('#social_media').scrollHeight;
	$('#infographics').scrollTop = $('#infographics').scrollHeight;
	$('#unhcr_news_and_features').scrollTop = $('#unhcr_news_and_features').scrollHeight;
	$('#unhcr_in_the_news').scrollTop = $('#unhcr_in_the_news').scrollHeight;
	$('#key_messages').scrollTop = $('#key_messages').scrollHeight;
		
	theHash = window.location.hash;
	temp = theHash.split('#');
	if(temp[1]){
		nextHash = temp[1];
		$.scrollTo($('#'+nextHash), 1100, {easing: 'easeInOutQuart', onAfter: function(){window.location.hash = nextHash}});	
	}
	// END CONTROL FOR SCROLLING
});

// GENERAL PAGE JS
$(document).ready(function(e) {
	
	  //$('#photo_video_left_col').height($('#photo_video_right_col').height());
	  
	  
	  var pv_height;
	  if( $('#photo_video_left_col').height() > $('#photo_video_right_col').height() ){
			pv_height =  $('#photo_video_left_col').height();
			//alert(">"); 
		} else {
			pv_height =  $('#photo_video_right_col').height();
			//alert("else"); 	
		}
		
	  $('#photo_video_left_col').height(pv_height);
	  $('#photo_video_right_col').height(pv_height);
	  
	  var sm_height;
	  if( $('#social_media_left').height() > $('#social_media_right').height() ){
			sm_height =  $('#social_media_left').height(); 
		} else {
			sm_height =  $('#social_media_right').height(); 	
		}
		console.log(sm_height);
	  $('#social_media_left').height(sm_height);
	  $('#social_media_right').height(sm_height);
	  
      $('.thumb_frame').hover(
	  	function(){
			$(this).find('.thumb_description').slideDown();	
		}, 
		function(){
			$(this).find('.thumb_description').slideUp();
		});
		
	$('.the_tweet').each(function(){
		$(this).find('a').prop("target", "_blank");	
	});
	
	$('.social_photo').hover(
		
		function(){
			var coverage = $(this).find('.coverage');
			$(this).find('.social_description').fadeIn(); 
			coverage.stop();
			coverage.animate({ top: '2px'}, 300); 	
		}, 
		
		function(){
			var coverage = $(this).find('.coverage'); 
			$(this).find('.social_description').fadeOut(); 
			coverage.stop();
			coverage.animate({ top: '-28px'}, 300); 	
		}
	);
		
		
	$('.thumb_frame').hover(
		function(){ 
			var coverage = $(this).find('.coverage');
			$(this).find('.pv_description').fadeIn();
			coverage.stop();
			coverage.animate({ top: '2px'}, 300);  
			
			}, 
		function(){ 
			var coverage = $(this).find('.coverage');
			$(this).find('.pv_description').fadeOut();
			coverage.stop();
			coverage.animate({ top: '-28px'}, 300); 
			}
		);	
		
	$('#added_text a').click(function(e){
		e.preventDefault();	
		$('#coming_soon').stop().fadeIn("slow", function(){ $(this).click(function(){ $('#coming_soon').stop(); $('#coming_soon').fadeOut("fast"); })});
	});
	
	$('.pv_photo_icon').click(function(e){
		e.preventDefault();
		var url = $(this).parent().parent().find('a').prop('href');
		window.open(url, "_blank");	
	});
	
	$('.pv_video_icon').click(function(e){
		e.preventDefault();
		var url = $(this).parent().parent().find('a').prop('href');
		window.open(url, "_blank");	
	});
	
	$('#marquee_photo').click(function(e){
	 	e.preventDefault();
	 	var link = $('#marquee_click_to_view a').prop('href');
	 	window.open(link, "_blank");	
	});
	
  }); // end document ready - GENERAL PAGE JS
  