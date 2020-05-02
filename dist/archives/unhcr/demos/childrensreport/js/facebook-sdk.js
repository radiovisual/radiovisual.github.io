window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
        appId      : '322620964771691',                    // App ID from the app dashboard
        link       : 'http://unhcrmedia.org/theFutureofSyria',
        status     : true,                                 // Check Facebook Login status
        xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
};

// Load the SDK asynchronously
(function(){

    if (document.getElementById('facebook-jssdk')) {return;}
    var firstScriptElement = document.getElementsByTagName('script')[0];
    var facebookJS = document.createElement('script');
    facebookJS.id = 'facebook-jssdk';
    facebookJS.src = 'http://connect.facebook.net/en_US/all.js';
    firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
}());


