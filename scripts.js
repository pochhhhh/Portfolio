//About Page scripts:

var greyButton = "#4B4B4B";

$("#show-skills").click(function(){

$(this).css("background", "black");
$("#show-location").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("Show Skills");


})

$("#show-location").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("Show Location");


})

$("#show-interests").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-location").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("Show Interests");


})

$("#show-coffee").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-location").css("background", greyButton);
$("#info-text").html("I love coffee!");

})
