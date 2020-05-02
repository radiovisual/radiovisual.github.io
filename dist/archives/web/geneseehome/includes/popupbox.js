/*
Functions for displaying modal popup boxes.

To create a new popup box you need the following:

1) A hidden <DIV> tag printed somewhere on the page that contains the popup box content.
   There may be a PHP class that helps you create this content.

<div id="myPopupBox" class="popupBox" style="width: 200px;">
	[..help button..][..close button..]
	[..popup box content..]
</div>

2) If the popup is modal then you need to define a javascript function that
   resets the popup box content. This function should take the popup box <DIV>
   element object as its first argument and a click event as its second
   arguement. This script should be in the <HEAD>.

<script type="text/javascript">
	function myPopupBoxReset(popupElement, clickEvent){
		# optional reset statements
	}
</script>

3) A button of some sort on the page that you'll use to show the popup box.
   This button will need to call the showPopupBox() javascript function and
   pass it a click event. The simplest way to achieve this is by redefining
   the button's onclick event. In fact, you might even want provide some fallback
   method for non-DOM-compliant browsers, or if the user has javascript turned off.

<script type="text/javascript">
// DOM-compliant
if (document.getElementById || document.all){
	document.write('<img id="myPopupBoxButton12345" src="myPopupBoxButton.gif"/ alt="My Popup" title="My Popup">');
	document.getElementById('myPopupBoxButton12345').onclick = function (e){
		showPopupBox(document.getElementById('myPopupBox), e, myPopupBoxReset, true);
	}
}
// non-DOM-compliant
else {
	document.write('<a href="javascript:void(0);" onclick="javascript:window.open(\'myPopupWindow.php?id=12345\',\'Popup\',\'scrollbars=yes,width=400,height=550\')">');
	document.write('<img src="myPopupBoxButton.gif" alt="My Popup" title="My Popup">');
	document.write('</a>');
}
</script>
<noscript>
	<a href="myPopupWindow.php?id=1234" target="_blank"><img src="myPopupBoxButton.gif"/ alt="My Popup" title="My Popup"></a>
</noscript

*/

var popupBoxOffsetFromMouse=[-5,-5]; //image x,y offsets from cursor position in pixels. Enter 0,0 for no offset



// For modal popups, a click outside of the popup box <DIV> will cause the popup to close.
// We do this be putting a big transparent <DIV> that masks the entire page behind the popup <DIV>.
// FIXME: this <DIV> should continue to cover the entire page even if the window scrolls
if (document.getElementById || document.all){

	document.write('<div id="popupBoxModalBackground" style="position: absolute; visibility: hidden; left: 0px; top: 0px; width: ' + getDocWidth() + 'px; height: ' + getDocHeight() + 'px; z-index: 50"></div>');

}


////////////////////////////////////////////////////////////////////////////////
/// @name showPopupBox
/// @desc show a given popup box
///
/// @param popupElement element object - the popup box <DIV>
/// @param e event object - a click event that we will use to position the popup box near the cursor
/// @param popupResetCallback function - should reset the popup box to its initial state
/// @param isModal boolean - if true, then clicking anywhere outside of the popupbox will cause it to close and reset
////////////////////////////////////////////////////////////////////////////////
function showPopupBox(popupElement, e, popupResetCallback, isModal){

	if ( typeof popupElement == 'string' ){
		popupElement = document.getElementById(popupElement);
	}
	
	movePopupBox(popupElement, e);
	popupElement.style.visibility="visible";

	if ( isModal && popupResetCallback ){
		document.getElementById('popupBoxModalBackground').onclick = function (modalE){
			popupResetCallback(popupElement, modalE);
			popupElement.style.visibility = 'hidden';
			document.getElementById('popupBoxModalBackground').style.visibility = 'hidden';
		};
		document.getElementById('popupBoxModalBackground').style.visibility = 'visible';
	}

}

////////////////////////////////////////////////////////////////////////////////
/// @name hidePopupBox
/// @desc hide a given popup box
///
/// @param popupElement - element object - the popup box <DIV>
////////////////////////////////////////////////////////////////////////////////
function hidePopupBox(popupElement){
	if ( typeof popupElement == 'string' ){
		popupElement = document.getElementById(popupElement);
	}
	popupElement.style.visibility="hidden";
	document.getElementById('popupBoxModalBackground').style.visibility = 'hidden';
}

////////////////////////////////////////////////////////////////////////////////
/// @name movePopupBox
/// @desc move a given popup box to the location defined by a click event
///
/// @TODO keep the popup box from extending beyond the right or bottom of the window
///
/// @param popupElement - element object - the popup box <DIV>
/// @param e event object - a click event that we will use to position the popup box near the cursor
////////////////////////////////////////////////////////////////////////////////
function movePopupBox(popupElement, e){

	//debugOnClickEventHandler(e);

	var xcoord = popupBoxOffsetFromMouse[0];
	var ycoord = popupBoxOffsetFromMouse[1];

	var docwidth = getDocWidth();
	var docheight = getDocHeight();

	if (typeof e != "undefined"){

//alert(e.pageY + ':' + popupElement.offsetHeight + ':' + docheight + ':' + getTrueBody().scrollTop);
//alert(ycoord);
/*
doc     ----------------------------
page    ------------------------
scroll  -------
pop            --------------
*/
		// ie doesn't like pageX
		var x = 0;
		var y = 0;	
		
		if(e.pageX || e.pageY) {
			x = e.pageX;
			y = e.pageY;
		} else if (e.clientX || e.clientY) {
			x = e.clientX;
			y = e.clientY;
			//x = e.clientX + document.body.scrollLeft;
			//y = e.clientY + document.body.scrollTop;
		}
		
				
		if (docwidth - x < popupElement.offsetWidth + xcoord){
			xcoord = x - xcoord - popupElement.offsetWidth; // Move to the left side of the cursor
		} else {
			xcoord += x;
		} 
					
		if (docheight + getTrueBody().scrollTop - y < popupElement.offsetHeight + ycoord){
			ycoord = y - ycoord - popupElement.offsetHeight;
		} else {
			ycoord += y;
		}

	} else if (typeof window.event != "undefined"){
		//if (docwidth + getTrueBody().scrollLeft - e.pageX < popupElement.offsetWidth + xcoord){
		if (docwidth - event.clientX < popupElement.offsetWidth + xcoord){
			xcoord = event.clientX - xcoord - popupElement.offsetWidth + getTrueBody().scrollLeft; // Move to the left side of the cursor
		} else {
			xcoord += event.clientX + getTrueBody().scrollLeft;
		}
		if (docheight - event.clientY < popupElement.offsetHeight + ycoord){
			ycoord = event.clientY - ycoord - popupElement.offsetHeight + getTrueBody().scrollTop;
		} else {
			ycoord += event.clientY + getTrueBody().scrollTop;
		}

	}	else {

		return;

	}

	//var docwidth=document.all? getTrueBody().scrollLeft+getTrueBody().clientWidth : pageXOffset+window.innerWidth-15;
	//var docheight=document.all? Math.max(getTrueBody().scrollHeight, getTrueBody().clientHeight) : Math.max(document.body.offsetHeight, window.innerHeight);
	
	popupElement.style.left = xcoord+"px"
	popupElement.style.top = ycoord+"px"

}


////////////////////////////////////////////////////////////////////////////////
/// @name whichQuadrant
/// @expirmental
/// @desc given a width and a height, figure our which quadrant a point falls in
///
/// @param pageX int - the width of the theoretical space
/// @param pageY int - the height of the theoretical space
/// @param pointX int - the horizontal distance of the point from the upper left corner
/// @param pointY int - the vertical distance of the point from the upper left corner
/// @return int - one of the QUADRANT_* constants
////////////////////////////////////////////////////////////////////////////////
var SIDE_TOP = 1;
var SIDE_BOTTOM = 2;
var SIDE_LEFT = 4;
var SIDE_RIGHT = 8;
var QUADRANT_TOP_LEFT = SIDE_TOP | SIDE_LEFT;
var QUADRANT_TOP_RIGHT = SIDE_TOP | SIDE_RIGHT;
var QUADRANT_BOTTOM_LEFT = SIDE_BOTTOM | SIDE_LEFT;
var QUADRANT_BOTTOM_RIGHT = SIDE_BOTTOM | SIDE_RIGHT;
function whichQuadrant(pageX, pageY, pointX, pointY){

	var quadrant = 0;
	var halfX = pageX/2;
	var halfY = pageY/2;

	if ( pointX < halfX ){
		quadrant |= SIDE_LEFT;
	} else {
		quadrant |= SIDE_RIGHT;
	}

	if ( pointY < halfY ){
		quadrant |= SIDE_TOP;
	} else {
		quadrant |= SIDE_BOTTOM;
	}

	return quadrant;

}

function getDocWidth(){
	return (document.all? getTrueBody().scrollLeft+getTrueBody().clientWidth : pageXOffset+window.innerWidth-15);
}

function getDocHeight(){
	return (document.all? Math.min(getTrueBody().scrollHeight, getTrueBody().clientHeight) : Math.min(window.innerHeight));
}

function getTrueBody(){
	return ( (!window.opera && document.compatMode && document.compatMode!="BackCompat") || window.opera)? document.documentElement : document.body
}

function debugOnClickEventHandler(e){

/*
type - this property indicates the type of event. 
target - this property indicates the object to which the event was originally sent.
*layerX - the cursor location when the click event occurs.
*layerY - the cursor location when the click event occurs.
*pageX - the cursor location when the click event occurs.
*pageY - the cursor location when the click event occurs.
*screenX - the cursor location when the click event occurs.
*screenY - the cursor location when the click event occurs.
which - 1 represents a left mouse click and 3 a right click.
modifiers - lists the modifier keys (shift, alt, ctrl, etc.) held down when the click event occurs.
*/
	s = typeof e + ":\n";
	s += 'type = ' + e.type + "\n";
	s += 'target = ' + e.target + "\n";
	s += 'layerX = ' + e.layerX + "\n";
	s += 'layerY = ' + e.layerY + "\n";
	s += 'pageX = ' + e.pageX + "\n";
	s += 'pageY = ' + e.pageY + "\n";
	s += 'screenX = ' + e.screenX + "\n";
	s += 'screenY = ' + e.screenY + "\n";
	s += 'which = ' + e.which + "\n";
	s += 'modifiers = ' + e.modifiers + "\n";

	alert(s);
}
