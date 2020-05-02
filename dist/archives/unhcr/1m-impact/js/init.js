var nextHash;
$(document).ready(function(){
	
	// get the height of the top navigation bar
	var noffset = $('#top').height()*-1;
	
	// FIND THE SECTION TO SCROLL TO
	$('#navigation a').click(function(e){
		e.preventDefault();
		nextHash = $(this).attr('href');
		
		$.scrollTo($($(this).attr('href')), 1100, {easing: 'easeInOut', offset: noffset, onAfter: function(){ return; window.location.hash = nextHash}});
		$('.navigation li').removeClass('active');
		$(this).parent().addClass('active');
		return false;
	});
		
	theHash = window.location.hash;
	temp = theHash.split('#');
	if(temp[1] == "debug") {
		$('#debug').show();
		
		$('#debug').html("window: "+$(window).width()+"<br/>");
		$('#debug').html("wrapper: "+$('#wrapper').width()+"<br/>");
		
		$(window).bind("resize", function(){
			$('#debug').html("window: "+$(window).width()+"<br/>wrapper: "+$('#wrapper').width()+"<br/>");
			$('#debug').html();	
		});
	}
});