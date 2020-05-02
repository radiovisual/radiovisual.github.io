
$(document).ready(function(){

    var phonemes = ["0px 0px","-15px 0px","0px -10px","-15px 12px","0px -22px","-15px 20px","0px -31px","-15px 28px","0px -42px"];

    var santahead = $("#head");
    var mouth = $("#mouth");
    var headimage = $("#head img");

    setInterval(function(){
        var randomx =  Math.round(Math.random() * -5) + 15;
        var randomy =  Math.round(Math.random() * -5) + 50;

        santahead.css("left", randomx+"px");
        santahead.css("top", randomy+"px");

        var mouthnum = Math.round(Math.random() * 9);
        mouth.css("background-position", phonemes[mouthnum]);

        var blink = Math.random() > 0.8 ? true : false;
        if (blink){
            headimage.attr("src", "images/santa-blink.png");
        } else {
            headimage.attr("src", "images/santa-head.png");
        }

    }, 150);

/*
   // Setup the countdown timer
    var days = $(".days");
    var hours = $(".hours");
    var minutes = $(".minutes");
    var seconds = $(".seconds");

    // start the countdown
    var expirationdate = new Date("12/20/14");
    var startdate = new Date();

    setInterval(function(){
        var timespan = countdown(expirationdate, null, countdown.DAYS|countdown.HOURS|countdown.MINUTES|countdown.SECONDS, startdate, 0);
        days.text( zp(timespan.days) );
        hours.text( zp(timespan.hours) );
        minutes.text( zp(timespan.minutes) );
        seconds.text( zp(timespan.seconds) );
    }, 100);
*/




    var user = {};
    // Handle the form interactions
    $("#form_button").click(function(){

        var name = $("#form_n").val();
        var email = $("#form_em").val();
        var charity_link = $("#form_c").val();

        if (name == "" || name.length <= 1) {
            alert("Please provide a valid name");
            return;
        }

        var hasAtSign = email.indexOf("@") !== -1;
        var hasPeriod = email.indexOf(".") !== -1;

        if (email == "" || email.length <= 4 || hasAtSign == false || hasPeriod == false ) {
            alert("Please provide a valid email address");
            return;
        }

        if (charity_link == "") {
            alert("Please provide a link to a charity");
            return;
        }

        user.name = name;
        user.email = email;
        user.charity_link = charity_link;
        sendToServer();
    });


    // Send the data to the server for processing
    function sendToServer(){

        $.ajax({
            type: "POST",
            url: "https://serene-bayou-6413.herokuapp.com/saveentry",
            data: user
        })
            .done(function( msg ) {
                if (msg.success){
                    $(".partcipant_name").text(msg.name);
                    var number_of_partcipants = parseInt($(".number_of_people").text());
                    $(".number_of_people").text( zp(++number_of_partcipants) );
                    showSuccessMessage();
                }
            });

    }

    // Get the total number of participants
    $.ajax({
        url: "https://serene-bayou-6413.herokuapp.com/getentrycount",
        type: "GET" })
     .done(function( data ) {
        var value = data.entry_count ? data.entry_count : 0;
        $(".number_of_people").text(zp(value));
     });



    function zp(num){
        var _num = parseInt(num);
        if (num < 10){return "0"+_num; }
        else { return _num; }
    }



    function showSuccessMessage(){

        $.fancybox.open($("#success_notification"),
            {
                maxHeight : 400,
                maxWidth: 500,
                fitToView	: true,
                width		: '50%',
                height		: '50%',
                autoSize	: true,
                closeClick	: false,
                openEffect	: 'fade',
                closeEffect	: 'fade',
                afterClose : function(){ resetInputFields() }
            }
        );

    }

    function resetInputFields(){
        $("#form_n").val("");
        $("#form_em").val("");
        $("#form_c").val("");
    }


    // Start the music playing
    var player = new MediaElementPlayer('#player');
    player.setVolume(0.25);
    player.play();
    var isPaused = false;

    $("#player_button").click(function(){

        if (isPaused){
            player.play();
            setMuteIcon(false);
        } else {
            setMuteIcon(true);
            player.pause();
        }
        isPaused = !isPaused;

    });

    function setMuteIcon(bool){
        var muteIcon = $("#player_button em");
        if (bool) {
            muteIcon.fadeIn();
        } else {
            muteIcon.fadeOut();
        }
    }


});