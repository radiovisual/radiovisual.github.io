
var darker_overlay;
var orange_overlay;

$(document).ready(function(){

    darker_overlay = $('.darker_overlay');
    orange_overlay = $('.orange_overlay');

    //$('#welcome').hover(function(){ $(this).css("backgroundColor", "#222222"); }, function(){ $(this).css("backgroundColor", "#222222"); });





    fixfwi();



}); // end ready

function fixfwi(){


    var bigvideoimg =  $('#big-video-wrap img');
    var imgh = parseInt($(window).height());
    if(parseInt($(window).width()) > imgh){
        imgh = $(window).width();
    }


    bigvideoimg.each(function(){

        $(this).css(
            { height: imgh}
        );

    });


    $(window).bind('resize', function(){ fixfwi(); });


}




$(document).ready(function () {

    var bgplayer = new MediaElementPlayer('#bg_video', {
        alwaysShowControls: false,
        startVolume: 0.0,
        loop: true,
        pauseOtherPlayers: false,
        enableKeyboard: false,
        success: function (mediaElement, domObject) {
            console.log('success');
            mediaElement.play();
        }
    });


    $(".various").fancybox({
        maxWidth: 1280,
        maxHeight: 1024,
        fitToView: true,
        width: '80%',
        height: '80%',
        autoSize: true,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none',
        scrolling: 'none'

    });
});


