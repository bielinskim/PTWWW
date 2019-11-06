var deadline = new Date("Apr 12, 2020 00:00:00").getTime(); 
var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("wielkanoc").innerHTML = days + "dni "  
+ hours + "godzin " + minutes + "minut " + seconds + "sekund "; 
    if (t < 0) { 
        clearInterval(x); 
        document.getElementById("wielkanoc").innerHTML = "EXPIRED"; 
    } 
}, 1000); 
           
$(document).ready(function(){
  alert("Strona zaladowana!");
  $("#header1").delay(3000).slideUp();
  $("#button1").click(function() {
      $("#div1").toggle();
  });
  $("#fontcolour").click(function() {
       $(".pclass1").css("color", $("#selectcolour").val());
       
  });
  $("#backgroundcolour").click(function() {
      $(".pclass1").css("background-color", $("#selectcolour").val());
  });
  $("#button2").click(function() {
      $(".pclass2").text($("#text1").val());
  });
  $("#button3").click(function() {
      $("#img").removeClass("img2");
      $("#img").addClass("img1");
  });
  $("#button4").click(function() {
      $("#img").removeClass("img1");
      $("#img").addClass("img2");
  });
  $("#button5").click(function(){
    
      $("#1").fadeIn(1000);
      $("#2").fadeIn(2000);
      $("#3").fadeIn(3000);
      $("#4").fadeIn(2000);
      $("#5").fadeIn(3000);
      $("#6").fadeIn(4000);
      $("#7").fadeIn(3000);
      $("#8").fadeIn(4000);
      $("#9").fadeIn(5000);
  });
  $("#button6").click(function(){
      $("#1").delay(500).fadeOut(5000);
      $("#2").delay(500).fadeOut(4000);
      $("#3").delay(500).fadeOut(3000);
      $("#4").delay(500).fadeOut(4000);
      $("#5").delay(500).fadeOut(3000);
      $("#6").delay(500).fadeOut(2000);
      $("#7").delay(500).fadeOut(3000);
      $("#8").delay(500).fadeOut(2000);
      $("#9").delay(500).fadeOut(1000);
  });
  $("#button7").click(function(){
      $("#div2").fadeToggle(1000);
  });
  $("#div3").mouseover(function(){
      $("hr").fadeOut();
  });
  $("#div3").mouseout(function(){
     $("hr").fadeIn();
  });
  });