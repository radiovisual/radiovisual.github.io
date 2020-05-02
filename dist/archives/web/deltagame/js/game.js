Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

var gameTimer = (function($){

    var seconds = 0;
    var timestring = "";
    var interval;
    var uitext;

    function startTimer(){
        if(!uitext){ uitext = $("#timer"); }
        interval = setInterval(function(){
            seconds++;
            setTime();
        }, 1000);
    }

    function stopTimer(){
        seconds = 0;
        setTime();
        clearInterval(interval);
    }

    function setTime() {
        var s = (seconds == 1) ? "" : "s";
        timestring = seconds+" second"+s;
        uitext.text(timestring);
    }

    function getTime(){
        return timestring;
    }

    return {
        startTimer : startTimer,
        stopTimer:stopTimer,
        getTime:getTime
    }

})(jQuery);


var DAC_Game = (function(){

    var gamePlaying = false;
    var questionIndex = -1;
    var _gameData = [];
    var questionCueDiv;
    var answerDiv;
    var answerInput;
    var selectedRegions = [];
    var regionsDiv;
    var currentQuestionNum;
    var hintIndex = 0;
    var totalHintsUsed = 0;
    var hintsUsedNum;
    var hintBox;
    var mistakesMade = 0;
    var correctSubmissions = 0;
    var welcomeDiv;
    var showAnswers = false;
    
    function isGamePlaying(){
        return gamePlaying;
    }

    function init(){
        questionCueDiv = $("#question_clue");
        answerDiv = $("#answer");
        answerInput = $("#answer_input");
        regionsDiv = $("#header_info p");
        currentQuestionNum = $("#current_question_num");
        hintsUsedNum = $("#hints_used");
        hintBox = $("#hint_box");
        welcomeDiv = $("#welcome");
        answerInput.focus();
    }

    function _updateUIForGameStart(){

        gamePlaying = true;

        // Setup the UI
        currentQuestionNum.text(1);
        $("#total_question_num").text(_gameData.length);
        $("#answer_input").val("");

        var regionsText = selectedRegions.toString();
        regionsDiv.text();
        regionsDiv.text(regionsText.substr(0, regionsText.length-1));

        gameTimer.startTimer();

        hintsUsedNum.text("0");

        mistakesMade = 0;
    }

    function setSelectedRegions(data){
        console.log(data);
        for( var item in data ){
            selectedRegions.push(data[item].region);
        }

    }

    function setGameData(gameData){
        _gameData = gameData;
    }

    function startGame(){
        _updateUIForGameStart();
        loadNextQuestion();
    }

    function loadNextQuestion(){

        if (questionIndex + 1 == _gameData.length) {
            _gameOver();
            return;
        }
        hintIndex = 0;
        questionIndex++;
        currentQuestionNum.text(questionIndex+1);
        var nextQuestion = _gameData[questionIndex];
        var val = showAnswers ? nextQuestion.code : "";
        answerInput.val(val);
        questionCueDiv.fadeOut("fast", function(){
            $(this).html(nextQuestion.location);
            $(this).fadeIn("fast");
        });
    }

    function checkAnswer(){
        if(answerInput.val().toUpperCase() === _gameData[questionIndex].code){
            // answer is correct
            showCorrectAnswer();
        } else {
            showIncorrectAnswer();
        }
    }

    function showIncorrectAnswer(){
        mistakesMade++;
        answerInput.addClass("error");
        answerInput.animate({
            marginLeft: "-10px"
        }, 100, function() {
            // Animation complete.
            answerInput.animate({
                marginLeft: "10px"
            }, 100, function() {
                // Animation complete.
                answerInput.animate({
                    marginLeft: "-5px"
                }, 100, function() {
                    // Animation complete.
                    answerInput.animate({
                        marginLeft: "5px"
                    }, 100, function() {
                        // Animation complete.
                        answerInput.animate({
                            marginLeft: "0px"
                        }, 100, function() {
                            // Animation complete.
                            answerInput.removeClass("error");
                        });
                    });
                });
            });

        });
    }

    function showCorrectAnswer(){
        correctSubmissions++;
        answerInput.addClass("correct");
        setTimeout(function(){ answerInput.removeClass("correct"); loadNextQuestion(); }, 400);
    }

    function showHint(){
        hintIndex++;
        _increaseHints();
        var answer = _gameData[questionIndex].code;
        hintBox.text(answer.substr(0,hintIndex));
        hintBox.fadeIn("slow", function(){ hintBox.fadeOut("slow"); });
    }

    function bumpHintIndex(){
        hintIndex = 0;
    }

    function _increaseHints(){
        totalHintsUsed++;
        hintsUsedNum.text(totalHintsUsed);
    }

    function _gameOver(){
        var time = gameTimer.getTime();

        var x = confirm("GAME OVER.\n You completed the game with the following stats:\n\nTOTAL QUESTIONS: "+_gameData.length+"\nMISTAKES MADE: "+mistakesMade+"\nHINTS USED: "+totalHintsUsed+"\nTIME: "+time);
        if (x){
            gameTimer.stopTimer();
            quitGame();
        }

    }

    function quitGame(){
        welcomeDiv.fadeIn("slow", function(){
            resetGame();
        });

    }

    function resetGame(){
        mistakesMade = 0;
        questionIndex = -1;
        hintIndex = 0;
        totalHintsUsed = 0;
        _gameData = [];
        selectedRegions = [];
        regionsDiv.text("");
        correctSubmissions = 0;
        gameTimer.stopTimer();
        gamePlaying = false;

    }

    return {
        init:init,
        setSelectedRegions: setSelectedRegions,
        setGameData : setGameData,
        startGame: startGame,
        checkAnswer : checkAnswer,
        showHint: showHint,
        quitGame : quitGame,
        isGamePlaying : isGamePlaying
    }

})();





$(document).ready(function(){

    var regionsSelected = [];

    // add the highlight behavior to the .regionBtn
    $(".regionBtn").click(function(){
        if( $(this).hasClass("selected") ){
            $(this).removeClass("selected");
            regionsSelected.remove(delta_airport_regions[$(this).attr("id")]);
            updateRegionsSelected();
        } else {
            $(this).addClass("selected");
            regionsSelected.push(delta_airport_regions[$(this).attr("id")]);
            updateRegionsSelected();
        }
    });

    function updateRegionsSelected(){
        var s = regionsSelected.length == 1 ? "" : "s";
        $("#start_with").text(regionsSelected.length +" Region"+s+" Selected");
    }

    // The start button has been clicked
    $("#start_btn").click(function(){
        if(regionsSelected.length > 0){
            startGameWithGameData(regionsSelected);
            resetStartScreen();
        } else {
            alert("Error! Please select at least one region before playing.");
        }
    });

    function resetStartScreen(){
        regionsSelected = [];
        $(".regionBtn").each(function(){ $(this).removeClass("selected"); });
        updateRegionsSelected();
    }
    // start the game
    function startGameWithGameData(gameData){

        console.log("start game with: ", gameData);

        // process the game data into one useable array
        var gameDataSorted = [];
        for (var array in gameData){
            for (var code in gameData[array].codes){
                var entry = gameData[array].codes[code];
                var o = {};
                o.code = code;


                var state = "";
                var airport = "";
                o.location = entry.city;

                if(entry.hasOwnProperty("state")){
                    state = entry["state"];
                    o.location += ", "+state;
                }

                if(entry.hasOwnProperty("specific airport")){
                    airport = entry["specific airport"];
                    if(airport !== ""){
                        o.location += " ("+airport+")";
                    }
                }

                o.location += "<br/>"+entry.country;

                gameDataSorted.push(o);
            }
        }

        DAC_Game.init();
        DAC_Game.setSelectedRegions(gameData);
        DAC_Game.setGameData(gameDataSorted);

        // Show the game screen
        $("#welcome").fadeOut("slow");

        DAC_Game.startGame();

        console.log("gameDataSorted", gameDataSorted);

    }

    // The Check button has been clicked
    $("#check_btn").click(function(){
        DAC_Game.checkAnswer();
    });

    $(document).bind("keydown", function(e){

        if(DAC_Game.isGamePlaying()){
            // on 'space' show hint
            if(e.keyCode == 32){
                DAC_Game.showHint();
                e.preventDefault();
            }
            // on 'enter' checkAnswer
            if(e.keyCode == 13){
                DAC_Game.checkAnswer();
            }
        }

    });

    // When the answer_input is tapped, show the hint

    $("#hint_note").click(function(){
        DAC_Game.showHint();
    });

    $("#quit_btn").click(function(){
        DAC_Game.quitGame();
    });

});