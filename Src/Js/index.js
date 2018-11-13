// Get the modal
var modal1 = document.getElementById('login');
var modal2 = document.getElementById('start');

// Get the button that opens the modal
var btn1 = document.getElementById("loginbutt");
var btn2 = document.getElementById("startbutt");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2= document.getElementById("close2");


btn1.onclick = function() {
    modal1.style.display = "block";  
};
btn2.onclick = function() {
    modal2.style.display = "block";  
};


span.onclick = function() {
    modal1.style.display = "none";
   
};
span2.onclick = function() {
   
    modal2.style.display = "none";
};
 document.getElementById("french").onclick = function () {
        location.href = "topics.php";
    };


//=======================TOPICS=================================

var tmodal = document.getElementById('topic-info');
var t1 = document.getElementById("t1");

t1.onclick = function() {
    tmodal.style.display = "block";  
};
 