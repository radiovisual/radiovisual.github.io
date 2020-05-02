
var words = [
    "twerking.",
    "smelling of cheese.",
    "superheroes.",
    "bacon.",
    "hacky sackin' it.",
    "shaolin masters.",
    "heroes in a half shell.",
    "McLovin' It.",
    "balding.",
    "big-boned.",
    "rockin' these parachute pants.",
    "warriors of funny.",
    "slapping your bitch face.",
    "Ghostbusters. Call us.",
    "telling your mom.",
    "broke as a joke.",
    "bound by comedic law.",
    "height-challenged.",
    "finding Waldo.",
    "your fantasy.",
    "peanut butter and jelly.",
    "needing chocolate milk.",
    "prancersizing.",
    "eating crackers in bed.",
    "knowing nothing, John Snow.",
    "featuring Lil' Wayne.",
    "comically comical.",
    "hilariously inept.",
    "expanding our comedic empire.",
    "heirs to the Iron Throne.",
    "more than human.",
    "teenage mutant ninja llamas.",
    "puking rainbows.",
    "bringing sexy back.",
    "bathing in the blood of funny.",
    "being random.",
    "poking you in the butt.",
    "too legit to quit.",
    "binge watching Netflix.",
    "obsessed with your face.",
    "calling from inside the house.",
    "making caveman noises.",
    "your density (destiny).",
    "dropping it like it's hot.",
    "going to Disneyland.",
    "winning.",
    "splendiferous.",
    "scrumtrulescent.",
    "eating crayons.",
    "sweatin' to the oldies.",
    "craving a hearty jig.",
    "what we eat.",
    "crushing it.",
    "medicated like crazy.",
    "avoiding certain doom.",
    "your mama.",
    "wondering what smells like fish.",
    "contemplating sandwiches.",
    "virgins.",
    "burping in your face.",
    "looking for John Connor, have you seen him?",
    "inebriated. Indeed.",
    "sufficiently hydrated.",
    "a slow-motion face punch.",
    "truffle shuffling.",
    "blowing chunks.",
    "your father.",
    "walking into a fart.",
    "epic grammar fail.",
    "Spartacus.",
    "the youth of the nation.",
    "hearing the people sing the songs of angry men.",
    "getting down with the sickness.",
    "passing go.",
    "not sharing our bacon.",
    "pillars of society.",
    "squishy faces.",
    "planking like a boss.",
    "jazzersizing.",
    "hilarity, embodied.",
    "playas'.",
    "droppin' sick beats.",
    "oozing fat rhymes.",
    "cruisin' for a bruisin'.",
    "feeding you lies.",
    "savants of funny.",
    "the boss of you.",
    "thinking Darth Vader has daddy issues.",
    "so right, everything else is wrong.",
    "magically delicious.",
    "the cure for hiccups.",
    "always confused. What?",
    "wanting to slap your mouth.",
    "sticking our finger in your pudding.",
    "eating all your bacon.",
    "stealing your roommate's cereal.",
    "stuffing our pie holes.",
    "not knowing where your fingers have been.",
    "drinking; for tonight we dine in hell!",
    "all up in your grill.",
    "deadly, highly-trained comedic warmongers.",
    "lying to ourselves.",
    "lying to our parents.",
    "celebrated concert pianists.",
    "useless, but hilarious.",
    "craving that little six pack of tiny gas station donuts. They're friggin' delicious.",
    "every man's fantasy.",
    "the artists formally known as Prince.",
    "strong with the force.",
    "mesmerized by your honkin' feet.",
    "eating underwear under there.",
    "counting to infinity.",
    "going to high five your face.",
    "super-sized.",
    "consumed with regret; but pounded that gallon of milk like a boss.",
    "overcome by the stench of feet.",
    "going to destroy you at air hockey.",
    "fancying your fancy pants, Mr. Fancy Pants.",
    "incredibly gassy.",
    "too sexy for our shirts.",
    "all of the funny.",
    "America's Next Top Model.",
    "the weakest link!",
    "awesome.",
    "improvisational.",
    "issuing a spoiler alert: Your face explodes.",
    "hilarious.",
    "hip.",
    "muting that noisy hole on your face.",
    "wondering why people say 'ham-fisted'.",
    "in line for the buffet.",
    "all with chronic halitosis.",
    "googling 'Wonder Sauna Hot Pants'."
];

$(document).ready(function(){

    var lineel = $('#hilarious_line');
    var hash = location.hash;
    var appendWord;

    if (hash === "#listall" || hash === "#showall"){
        listall();
        return;
    }

    var _words = shuffle(words);

    if(hash !== "" && hash.substring(0,1) === "#"){
        hash = hash.substring(1);
        var c = hash.replace(/-/gmi, " ");
        appendWord = "("+c+").";
    }

    if (appendWord){
        lineel.text( removeTrailingPeriod(words[0]) + appendWord );
    } else {
        lineel.text( words[0] );
    }

    var word = 0;
    var interval = 2200;
    var timer = setTimeout(newWord, interval);

    function newWord(){

        lineel.fadeOut("slow", function(){

            var w = _words[word];
            if (appendWord) {
                var s = removeTrailingPeriod(w);
                w = s +" "+appendWord; }
                lineel.text( w );
                lineel.fadeIn("slow");
        });

        word++;
        if (word > _words.length) {
            word = 0;
        }

        timer = setTimeout(newWord, interval);

    }

    function shuffle(_array) {
        var currentIndex = _array.length, temporaryValue, randomIndex ;

        while (0 !== currentIndex) {

            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = _array[currentIndex];
            _array[currentIndex] = _array[randomIndex];
            _array[randomIndex] = temporaryValue;
        }

        return _array;
    }

    function listall(){
       var s = "";
       for (var word in words){
          s += words[word];
          s+="<br/>";
       }
       lineel.html(s);
    }

    function removeTrailingPeriod(word){
        var len = word.length;
        if ( word.substring(len-1) === "."){
            return word.substring(0, len-1);
        }
        return word;
    }

});