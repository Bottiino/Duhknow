

$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
        $("body").addClass("med-col");
        }
        if ($(this).scrollTop() < 100) {
        $("body").removeClass("med-col");
        }
       
    });
});

$(function () {
    $(window).scroll(function () {
     if ($(this).scrollTop() > 300) {
        $("body").addClass("hard-col");
        
        }
         if ($(this).scrollTop() < 300) {
        $("body").removeClass("hard-col");
        }
       
    });
});
 


var tmodal = document.getElementById('topic-info');
var x = document.getElementById("tbutt");
var span = document.getElementsByClassName("close")[0];


var buttons = document.getElementsByClassName('btn');
for(var i=0; i<buttons.length; i++){
    
      
    buttons[i].addEventListener("click", function()
    {
        tmodal.style.display = "block";
        $("body").addClass("mod-col");

        
    });
   
      
}


span.onclick = function () {
    tmodal.style.display = "none";
     $("body").removeClass("mod-col");

};
 document.getElementById("home").onclick = function () {
        location.href = "index.html";
    };
document.getElementById("playbutt").onclick = function () {
        location.href = "game.php";
    };


