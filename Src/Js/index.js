$(function () {    
    $(document).off('click', 'div.language').on('click', 'div.language', function () {
        var lang = $(this).text().toString().toLowerCase();
        
        $.ajax({
            type: "POST",
            url: "../Database/test.php",
            data: {functionname: "setLang", lang: lang},
            success: function (){
                window.location = '../Php/mainMenu.php';
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});
function getDiff(topic){
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            async: false,
            url: "../Database/test.php",
            data: {functionname: "getDiff", topic: topic},
            success: function (data){
                result = data;
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
        return result;
    }
$(function () {    
    $(document).off('click', 'div.topicCircle').on('click', 'div.topicCircle', function () {
        var topic = $(this).data('id');
        var diff = getDiff(topic);
        
        $.ajax({
            type: "POST",
            url: "../Database/test.php",
            data: {modalTopic: topic},
            success: function (data){
                displayTopicModal(topic, data, diff);
            },
            error: function (data){                
                console.log('Error' + data);
            }
        });
    });    
});
$(function () {    
    $(document).off('click', 'button#playTopic').on('click', 'button#playTopic', function () {
        
        var topic = $(this).text();
        
        $.ajax({
            type: "POST",
            url: "../Database/test.php",
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
$(function () {    
    $(document).off('click', 'button#mainmenuButt').on('click', 'button#mainmenuButt', function () {
        window.location = '../Php/mainmenu.php';
    });    
});
$(function () {    
    $(document).off('click', 'button#retryButt').on('click', 'button#retryButt', function () {
        window.location = '../Php/game.php';
    });    
});

function displayTopicModal(topic, firstWord, diff){
        $('div#modalTopicSelected').html(
            '<div class="modal-dialog" role="document">' +
              '<div class="modal-content">' +
                '<div class="modal-body mx-3 text-center">' +
                    '<div>' +
                        '<img class="modalTopicImg" src="../tileImg/' + firstWord + '.png" alt="' + topic + '"/>' +
                    '</div>' +
                    '<div id="exp" class="md-form mb-5">' + ucfirst(topic) + '</div>' +
                    '<div id="exp" class="md-form mb-2">' +
                        '45/250<i class="icon fas fa-star"></i>' +
                    '</div>' +
                    
                    '<div id="highestRound" class="md-form mb-1">' +
                        '25 <i class="icon fas fa-bolt"></i>' +
                    '</div>' +
                '</div>' +
                '<div class="modal-footer d-flex justify-content-center">' +
                  '<button id="playTopic" class="' + diff +  ' btn-block btn-success">Play</button>' +
                '</div>' +
              '</div>' +
            '</div>');
    }
    
function ucfirst(text) {
    if (text.length > 1){
        return text.substring(0, 1).toUpperCase() + text.substring(1).toLowerCase();
    }
    
    return text.toUpperCase();
}
$(function(){
    $(document).off("submit", "form#regForm").on('submit','form#regForm',function(){

        var username = $('input[name=username]').val();
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();
        
        $.ajax({
            type: "POST",
            url: "../Database/reg.php",
            data: {username: username, email: email, password: password},
            success: function (data){
                if(data === "success")
                {
                    alert(1);
                }
                else{
                    $('div.errorMsg').show();
                    $('div.errorMsg').html(data);
                }
            },
            error: function (){                
                alert("error");
            }
        });
    });
});
