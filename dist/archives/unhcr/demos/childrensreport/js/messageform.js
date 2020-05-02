

var message_sent = false;

$(document).ready(function(){




    $('#send_message_button').click(function(e){
        e.preventDefault();



        var errors = [];

        // validate the name field
        var sender_name = $('#sender_name').val();
        var sender_email = $('#sender_email').val();
        var message = $('#message').val();
        var is_public = $('input[name="private"]:checked').val();


        if (sender_name.trim().length < 2){
            errors.push({field:"name", error:"Your name"});
        }

        var email_regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
        var email_arr = email_regex.exec(sender_email);
        if (sender_email.trim().length < 4 || !email_arr){
            errors.push({field:"email", error:"A valid email address"});
        }

        if (message.trim() == ""){
            errors.push({field:"message", error:"A message to send"});
        }

        if (errors.length == 0){


            $.fancybox.open("#email_dialog", { beforeShow: function(){
                showSendingNotification();
            }, afterClose: function(){
                closeAllEmailNotifications();
                if ( message_sent == true){
                    redirect_loop();
                }
            }});




            // no errors
            // process the form
            var message_object = {name:sender_name, email:sender_email, message:message, is_public:is_public, posted: new Date()};


            var jqxhr = $.post( "http://unhcrmedia-01.herokuapp.com/message-syrian-child", message_object, function(data) {

                //console.log("data", data);
                if(data.hasOwnProperty("success")){




                    showMessageSuccessNotfication();
                    message_sent = true;

                } else {
                    showEmailErrorNotification();

                }
            })
                .done(function() {
                   // console.log(".done" );
                })
                .fail(function(error) {
                    showMessageErrorNotfication();
                    //console.log(".fail", error);
                })
                .always(function() {
                    //console.log( ".finished" );
                });


        } else {


            var html = '<span class="orange">Please enter:</span> <br/>';

            for (var i = 0, l = errors.length; i < l; i++){
                html += ""+errors[i].error+"<br/>";
            }







            $.fancybox.open("#email_dialog", { autoSize:true, beforeShow: function(){
                $('#message_form_error p').html(html);
                showEmailErrorNotification();
            }, afterClose: function(){
                closeAllEmailNotifications();
            }});




        }

    })








    $.getJSON( "http://unhcrmedia-01.herokuapp.com/get-childrens-messages-for-website", function( data ) {
        $('total_messages').text(data.total);
        var messages = data.messages[0];

        var html= "";

        //console.log(messages);


        for (var i = 0, j = messages.length; i < j; i++){


            html += '<div class="pull-quote-centered"><div class="message">';
            html += '<h4>'+messages[i].name+'</h4>';
            html += '<p>'+proccesMessageHTML(messages[i].message)+'</p>';
            html += '<p class="posted">'+proccesTimeHTML(messages[i].posted)+'</p></div><div class="header-hr"></div></div>';

        }

        $('#messages_container').empty().html(html);

        fireCommentInteractivity();

        //console.log(messages);


    });






}); // end ready


function redirect_loop(){
    location.replace("success_redirect.php");
}

// OVERRIDES THE FUNCTION IN SHARING_META.js
function showEmailErrorNotification(){



    if ($('#status_message').is(':visible') == false){
        $('#status_message').show();
    }

    if ($('#email_sending').is(":visible") == true){
        $('#email_sending').hide("fast");
    }

    $('#message_form_error').fadeIn("slow");
}

// OVERRIDES THE FUNCTION IN SHARING_META.js
function showMessageSuccessNotfication(){

    if ($('#message_form_error').is(":visible") == true){
        $('#message_form_error').hide();
    }

    if ($('#message_send_error').is(":visible") == true){
        $('#message_send_error').hide();
    }

    if ($('#status_message').is(':visible') == false){

        $('#status_message').show();
    }

    if ($('#email_sending').is(":visible") == true){
        $('#email_sending').fadeOut("fast");
    }

    if ($('#message_sending').is(":visible") == true){
        $('#message_sending').fadeOut("fast");
    }

    if ($('#message_form_error').is(":visible") == true){
        $('#message_form_error').hide();
    }

    $('#message_sent').fadeIn("slow");

}


function showMessageErrorNotfication(){



    if ($('#status_message').is(':visible') == false){

        $('#status_message').show();
    }

    if ($('#email_sending').is(":visible") == true){
        $('#email_sending').fadeOut("fast");
    }

    if ($('#message_sending').is(":visible") == true){
        $('#message_sending').hide();
    }

    if ($('#message_form_error').is(":visible") == true){
        $('#message_form_error').hide();
    }

    $('#message_send_error').fadeIn("slow");

}





function fireCommentInteractivity(){

    $('.pull-quote-centered').hover(
        function(){

            $(this).addClass('rgba-orange');
            $(this).find('a').css("color", "#ff9d7c");

        },

        function(){
            $(this).removeClass('rgba-orange');
            $(this).find('a').css("color", "#e7501d");

        });


}

function proccesMessageHTML(str){
    return str;
}
function proccesTimeHTML(str){
    var d = new Date(str);

    var dstr = d.toDateString().substring(0,15);
    return dstr;

}