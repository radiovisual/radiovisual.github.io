

var theHash;
var locations = [];


$(document).ready(function(){


    $('.anchor').each(function(){
        var hash = $(this).prop("href").split("#");
        if (hash[1]){
            locations.push(hash[1]);
            //console.log(hash[1]);
        }
    });

    theHash = window.location.hash;
    temp = theHash.split('#');

    if(temp[1]) {

        if (temp[1] == "message-success"){

            $.fancybox.open($(".message_success"), {});
            location.hash = "";
        }



        if (locations.indexOf(temp[1]) != -1) {
            console.log("watiing...");

            var imgsLoaded = imagesLoaded( '#wrapper .img-full-width', function() {});


            imgsLoaded.on("done", function(instance){

                var offset = $('a[href=#'+temp[1]+']').offset().top;
                var position = $('a[href=#'+temp[1]+']').position().top;

                $.scrollTo(position, 1100, {easing: 'easeOutQuad', onAfter: function(){}, offsetTop:3500});
            });

        }

    }

}); // end ready




var CR_menuActive = false;
var $currentMenu;
var currentMenuId = "";
var $subnav;
var $staticHeader;
var main_header;
var stripnav;
var mainnav;
var darker_overlay;
var orange_overlay;
var call_to_action_rule;
var call_to_action_text;
var acknowledgements_active = false;

$(document).ready(function(){


    $(window).bind("scroll", function(){

        if($(window).scrollTop() > 1500){

            $('.main_header').hide();
        }
         else {
            $('.main_header').show();
        }

    });
    //var s = skrollr.init( { forceHeight: false });


    stripnav = $('#strip_nav');
    mainnav = $('#main_nav');
    darker_overlay = $('.darker_overlay');
    orange_overlay = $('.orange_overlay');
    call_to_action_rule = $('.call_to_action_rule');
    call_to_action_text = $('p.cta_text');
    main_header = $('.main_header');

    // bind the resize event to handle some of the responsive tasks
    $(window).bind("resize", handleResize);


    // position the main header text to align with the first header
    if( $('.first_white_header').length > 0){
        var offsetcalc = $('.first_white_header').offset().left + 20;
        main_header.css("left", ""+offsetcalc+"px");
    }


    $subnav = $('#subnav');
    $('.subnav-hideme').each(function(){
        $(this).removeClass('subnav-hideme');
        $(this).hide();
    });



    $(window).bind('resize', function(){ fixFullWidthImages(); });

    // setup the tooltips
    $('.footnote-number').each(function(index){
        $(this).prop("title", $('.footnote_section .footnote').eq(index).html());

    });

    $('.footnote-number').tipTip({ maxWidth:"400px", edgeOffset:10, defaultPosition:"top"});

    $('.tweet-me-light').hover(
        function(){
            $(this).animate({backgroundColor:"#007abf", color:"#fffff"}, 300);
            $(this).find('img').prop("src", "img/twitter-16x20-white.png");
        },
        function(){
            $(this).find('img').prop("src", "img/twitter-16x20-blue.png");
            $(this).animate({backgroundColor:"#cce4f2", color:"#666666"}, 400);
        });

    $('.tweet-me-dark').hover(
        function(){
            $(this).animate({backgroundColor:"#007abf", color:"#fffff"}, 300);
            $(this).find('img').prop("src", "img/twitter-16x20-white.png");
        },
        function(){
            $(this).find('img').prop("src", "img/twitter-16x20-blue.png");
            $(this).animate({backgroundColor:"#222", color:"#007abf"}, 400);
        });




    $('.call_to_action_button').hover(
        function(){
            $(this).animate({backgroundColor:"#007abf", color:"#fffff"}, 300);

        },
        function(){
            $(this).animate({backgroundColor:"#222222", color:"#ffffff"}, 400);
        });


    $staticHeader = $('#wrapper h4:first');
    $dynamicHeader = $('div.header_text');


    $('.play_button').hover(function(){ $(this).parent().addClass("dark_overlay"); }, function(){ $(this).parent().removeClass('dark_overlay'); });

    $('#next_section a').hover(
       function(){
       $(this).animate({backgroundColor:'#007abf', color:'#fff'}, 400);
    }, function(){
       $(this).animate({backgroundColor:'#fff', color:'#007abf'}, 400);
    });



  // navigation
    $('.menu_button').click(function(e){
        e.preventDefault();
        showNavigationMenu();
    });

    $('.menu_option').each(function(index){
        switch(index){
            case 0:
                $(this).click(function(){ location.assign("executive-summary.html"); });
                break;
            case 1:
                $(this).click(function(){ location.assign("fractured-families.html"); });
                break;
            case 2:
                $(this).click(function(){ location.assign("scarred.html"); });
                break;
            case 3:
                $(this).click(function(){ location.assign("isolated-and-insecure.html"); });
                break;
            case 4:
                $(this).click(function(){ location.assign("children-at-work.html"); });
                break;
            case 5:
                $(this).click(function(){ location.assign("the-challenge-of-education.html"); });
                break;
            case 6:
                $(this).click(function(){ location.assign("born-in-exile.html"); });
                break;
            case 7:
                $(this).click(function(){ location.assign("call-to-action.html"); });
                break;
        }
    });

    $('.call_to_action_button').click(function(){ location.assign("call-to-action.html"); });





    $('.menu_option').hover(function(){ $(this).css("backgroundColor", "#007abf"); $(this).find("small").css("color", "#003e61"); }, function(){ $(this).css("backgroundColor", "#171717"); $(this).find("small").css("color", "#494949");});


    $('.close-button, .awk-close-button').hover(function(){ $(this).css('backgroundColor', "#007abf"); }, function(){ $(this).css('backgroundColor', "#1B1B1B"); });

    // case studies
    $('.case-wrapper').hover(function(){ darker_overlay.fadeIn("slow"); }, function(){ darker_overlay.fadeOut("slow"); });
    $('#call_to_action').hover(function(){ orange_overlay.fadeIn("slow"); call_to_action_rule.css("backgroundColor", "#fff"); call_to_action_text.css("color", "#222"); }, function(){ orange_overlay.fadeOut("slow"); call_to_action_rule.css("backgroundColor", "#007abf");  call_to_action_text.css("color", "#fff"); });


    $('#main_nav img').click(function(e){e.preventDefault(); location.assign("index.html"); });



    $('.pull-quote-centered').hover(
        function(){

            $(this).removeClass('rgba-gray');
            $(this).addClass('rgba-orange');
            $(this).find('a').css("color", "#ff9d7c");

        },

        function(){
            $(this).removeClass('rgba-orange');
            $(this).addClass('rgba-gray');
            $(this).find('a').css("color", "#e7501d");

        });






    handleResize();

}); // end ready


function showNavigationMenu(){


    $('.acknowledgements-btn').click(function(e){
        e.preventDefault();

        $('#acknowledgements').fadeIn("slow", function(){
            acknowledgements_active = true;
        });
    });


    var navmenu = $('#navigation_menu');


    $('#nav_overlay').fadeIn("slow", function(){
        $('#navigation_menu_wrapper').fadeIn("slow", function(){ });
    });


    $('#navigation_menu_wrapper').click(function(e){

        if(e.pageX > (navmenu.offset().left + navmenu.width()) || e.pageX < navmenu.offset().left || e.pageY < navmenu.offset().top || e.pageY > (navmenu.offset().top + navmenu.height())){
            if (acknowledgements_active){
                closeAwknowledgements();
            } else {
                closeNavigationMenu();
            }

        } else if( acknowledgements_active ) {
            closeAwknowledgements();
            return false;
        }
    });

    navmenu.find('.close-button').click(closeNavigationMenu);
    navmenu.find('.awk-close-button').click(closeAwknowledgements);



}


function closeAwknowledgements(){
    $('#acknowledgements').fadeOut("slow", function(){
        acknowledgements_active = false;
    });
}
function closeNavigationMenu(){
    $('#navigation_menu_wrapper').slideUp("slow", function(){
        $('#nav_overlay').fadeOut("slow");

    });




}



function handleResize(){
   var ww = $(window).width();
   var wh = $(window).height();

   //var caption = $('.media-widget-caption:first');
   //var captionWidth = caption.width() + caption.offset().left;

   var minimumBorder = 5;


    // media widgets
/*
   $('.media-widget-media').each(function(index){
       var $img = $(this).find('img');
       var newwidth = ww - captionWidth - (minimumBorder*2);
       $img.width(newwidth);
       $img.css("margin-left", "300px");
   });

    // case studies

    var newleft = $('#wrapper p:first').offset().left - 59;
    $('.case_study').each(function(index){
        $(this).css("margin-left", newleft);
    });

    // full width img
    $('.caption-small').each(function(){
        //$(this).width(ww - $(this).offset().left);
    });
*/

    // position the main header text to align with the first header



    if ($('.first_white_header').length > 0){
        var offsetcalc = $('.first_white_header').offset().left + 20;
        main_header.css("left", ""+offsetcalc+"px");
    }

    if ($(window).width() > 912){
    $('.caption-small').css("padding-left", ""+(offsetcalc+100)+"px");
    }
    fixFullWidthImages();

}


function fixFullWidthImages(){
    $('.img-full-width img').each(function(){
        if( !$(this).hasClass('social-media')){
            $(this).width($(window).width());
        }

    });
}
