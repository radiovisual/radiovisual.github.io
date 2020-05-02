



var FOS_media_dir = {

    index : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-04-image-1_2.jpg",
        video : "http://www.youtube.com/watch?v=qGDSzBX5eh8"
    },

    executive_summary : {
        bg_image:"https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-01-image-front-cover-00654.jpg",
        video : "http://www.youtube.com/watch?v=VIyAy18NU9E"
    },

    fractured_families : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/00646-low-crop.jpg",
        video : "http://www.youtube.com/watch?v=-OC_RNL4tGU"
    },

    scarred : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-25-image-06594.jpg",
        video : "http://www.youtube.com/watch?v=RO3oFDi-RyE"
    },

    isolated_and_insecure : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-62-image-back-cover-6.jpg",
        video : "http://www.youtube.com/watch?v=NZtRJqy5_3Q"
    },

    children_at_work : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-41-image-11426.jpg",
        video : "http://www.youtube.com/watch?v=Zo5jkyAUO9c"
    },

    born_in_exile : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-08-image-08439-low-crop.jpg",
        video : "http://www.youtube.com/watch?v=R_k7nZ5vFDc"
    },

    call_to_action : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-58-image-07677.jpg",
        video : "http://www.youtube.com/watch?v=ZITGBqJyX8w"
    },

    message_a_syrian_child : {
        bg_image: "https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-49-image-photo-06.jpg",
        video : "http://www.youtube.com/watch?v=qGDSzBX5eh8"
    },
	 the_challenge_of_education : {
        bg_image:"https://s3-eu-west-1.amazonaws.com/unhcr-campaigns/childrensreport/photos/page-50-image-00651.jpg",
        video : "http://www.youtube.com/watch?v=e4Uree05eVE"
    }

}



$(document).ready(function () {

    var page_id = $('div:first').prop("class");

    if (Modernizr.touch) {

        // mobile device show the image
        var bgimg = $('#big-video-wrap img');
        bgimg.prop ("src", FOS_media_dir[page_id].bg_image );

        $('#big-video-wrap img').show();
        $('#big-video-wrap video').hide();



    } else {

        // desktop/laptop show the video
        //$('#big-video-wrap video').prop("src", FOS_media_dir[page_id].video);

        var bgplayer = new MediaElementPlayer('#bg_video', {
            plugins: ['youtube'],
            alwaysShowControls: false,
            startVolume: 0.0,
            loop: true,
            pauseOtherPlayers: false,
            enableKeyboard: false,
            success: function(mediaElement, domObject){
                console.log('success in report_media_directory', mediaElement);
                mediaElement.play();
            }
        });


    }

}); // end ready


