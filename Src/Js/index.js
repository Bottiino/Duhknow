$(function () {    
    $(document).off('click', 'div.language').on('click', 'div.language', function () {
        var lang = $(this).text();
        
        $.ajax({
            type: "POST",
            url: "../Database/session.php",
            data: {lang: lang},
            success: function (){
                window.location = '../Php/mainMenu.php';
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});
$(function () {    
    $(document).off('click', 'div.topicCircle').on('click', 'div.topicCircle', function () {
        var topic = $(this).val();
        
        $.ajax({
            type: "POST",
            url: "../Database/session.php",
            data: {topic: topic},
            success: function (){
                window.location = '../Php/game.php';
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});