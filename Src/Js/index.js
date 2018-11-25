$(function () {    
    $(document).off('click', 'div.language').on('click', 'div.language', function () {
        var lang = $(this).text().toString().toLowerCase();
        
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
        var topic = $(this).data('id');
        var topicUpper = $(this).data('id').toUpperCase();
        
        $.ajax({
            type: "POST",
            url: "../Database/test.php",
            data: {modalTopic: [topic, topicUpper]},
            success: function (){
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});
$(function () {    
    $(document).off('click', 'button#playTopic').on('click', 'button#playTopic', function () {
        var beginner = $(this).hasClass("beginner");
        var intermediate = $(this).hasClass("intermediate");
        var advanced = $(this).hasClass("advanced");
        
        alert("Beg = " + beginner + ", Inter = " + intermediate + ", Adv = " + advanced);
        
        var topicUpper = $(this).text().toString().toUpperCase();
        
        $.ajax({
            type: "POST",
            url: "../Database/test.php",
            data: {topic: topic},
            success: function (){
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});