$(function () {

    var round = 0;

    setTimeout(newBoardBeginner, 3000);

    Array.prototype.shuffle = function(){
        var i = this.length, j, temp;
        while(--i > 0){
            j = Math.floor(Math.random() * (i+1));
            temp = this[j];
            this[j] = this[i];
            this[i] = temp;
        }
    };
    
    function getEightWords(){
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            async: false,
            url: "../Database/test.php",
            data: {functionname: "getEightWords"},
            success: function (data){
                result = data;
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
        return result;
    }
    function getEightPics(){
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            async: false,
            url: "../Database/test.php",
            data: {functionname: "getEightPics"},
            success: function (data){
                result = data;
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
        return result;
    }
    
    function languageChange(word, lang){
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            async: false,
            url: "../Database/test.php",
            data: {functionname: "languageChange", arguments: [word, lang]},
            success: function (data){
                result = data;
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
        return result;
    }
    //Function to get name 
//    function getCategorys(){
//        jQuery.ajax({
//            type: "POST",
//            url: '../Database/functions.php',
//            dataType: 'json',
//            data: {functionname: 'getCategory', argument: 1},
//
//            success: function (data) {
//                return data;
//            }
//        });
//    }
//    
    //Function call for getting the id, english, french, irish, german, french and image for all words for use in dictionary
//    function getWords(){
//        jQuery.ajax({
//            type: "POST",
//            url: '../Database/functions.php',
//            dataType: 'json',
//            data: {functionname: 'getWords', argument: 1},
//            success: function (data) {
//                return data;
//            }
//       });
//    }

    function newBoardBeginner(){
        var topic_pics = getEightPics();

        var rand = Math.floor((Math.random() * 8));
        var centerEnglish = topic_pics[rand];

        var output = '';
        var j = 0;

        topic_pics.shuffle();

        for(var i = 0; i < 8; i++){
            if(j !== 4)
            {
                output += '<div class="tile out_tile"><div class="tileText"><img class="tileImg" src="../tileImg/' + topic_pics[i] + '.png"/></div></div>';
            }
            else
            {
                output += '<div id="centre_tile" class="tile"><div class="tileText">' + centerEnglish + '</div></div>';
                i--;
            }
            j++;
        }
        document.getElementById('board').innerHTML = output;
    }
    function newBoardIntermediate(){
        
        //var topic_words = ['a','b','c','d','e','f','g','h'];
        
        var topic_words = getEightWords();        

        var rand = Math.floor((Math.random() * 8));
        var centreCardSeen = languageChange(topic_words[rand], "english");
        var centreCardHidden = topic_words[rand];

        var output = '';
        var j = 0;

        topic_words.shuffle();

        for(var i = 0; i < 8; i++){
            if(j !== 4)
            {
                output += '<div class="tile out_tile"><div class="tileText">' + topic_words[i] + '</div></div>';
            }
            else
            {
                output += '<div id="centre_tile" class="tile"><div class="tileText">' + centreCardSeen + '</div></div>';
                i--;
            }
            j++;
        }
        document.getElementById('board').innerHTML = output;
    }
    function newBoardAdvaanced(){
        
        //var topic_words = ['a','b','c','d','e','f','g','h'];
        
        var topic_words = getEightWords();   
        var rand = Math.floor((Math.random() * 8));
        var centreCardSeen = languageChange(topic_words[rand], "english");

        var output = '';
        var j = 0;

        topic_words.shuffle();

        for(var i = 0; i < 8; i++){
            if(j !== 4)
            {
                output += '<div class="tile out_tile"><div class="tileText">' + topic_words[i] + '</div></div>';
            }
            else
            {
                output += '<div id="centre_tile" class="tile"><div class="tileText">' + centreCardSeen + '</div></div>';
                i--;
            }
            j++;
        }
        document.getElementById('board').innerHTML = output;
    }
    
    var timeLeft = "Ready";
    var body = document.getElementById('countdown');
    var text = document.getElementById('countdownText');
    countdown();
    var timerId = setInterval(countdown, 1000);
    
    function countdown(){
        text.innerHTML = timeLeft;
        
        if(timeLeft === "Done"){
            clearTimeout(timerId);
            body.style.background = "rgb(1,1,1,0)";
            body.style.display = "none";
        }
        else if(timeLeft === "Go!"){            
            timeLeft = "Done";
            body.style.background = "#5BB85D";
        }
        else if(timeLeft === "Set"){
            timeLeft = "Go!";
            body.style.background = "#EFAD4D";
        }
        else{            
            timeLeft = "Set";
            body.style.background = "#D9534E";
        }
    }    
    
    function show(id){
        document.getElementById(id).style.display = "block";
    }
    setTimeout(function(){show("finScreen");}, 34000);
    setTimeout(function(){show("timesUp");}, 34000);
    setTimeout(function(){show("roundFin");}, 34000);
    setTimeout(function(){show("retryButt");}, 34000);
    setTimeout(function(){show("mainmenuButt");}, 34000);

    function selectedTile(tile, centre)
    {             
        var val = tile.text();  
        
        console.log("tile: " + val + " Centre: " + centre);
        if(val == centre)
        {
            tile.css('background', '#1F1');
            round++;
            setTimeout(newBoard, 250);
            $('div#round').html("Round " + round);
            //call function here
        }
        else
        {
            tile.css('background', '#F11');
            setTimeout(newBoard,250);
            fliptile(tile);
        }
    }    
    function fliptile(tile)
    {
        tile.css('transform-style','preserve-3d');
        tile.css('animation','spin 0.8s linear');
    }
    setTimeout(timesUp, 34000);
    function timesUp(){
        $('div#timesUp').html("Times Up");
        $('div#roundFin').html("Round " + round);
        $('button#retryButt').html("Retry");
        $('button#mainmenuButt').html("Main Menu");
    }
    
    $(document).off('click', 'div.out_tile').on('click', 'div.out_tile', function () {
        var centreVal = $('div#centre_tile').text();
        var centre = languageChange(centreVal, "french");
        selectedTile($(this), centre);
    });   
});
