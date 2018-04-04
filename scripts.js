//About Page scripts:

var greyButton = "#4B4B4B";

$("#show-skills").click(function(){

$(this).css("background", "black");
$("#show-location").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("I'm a web developer that enjoys building web applications with JavaScript. I also have some experience with PHP and enjoy learning about MVC architecture.");


})

$("#show-location").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("I am from the UK, based in London - A city which hardly needs any introduction ;)");


})

$("#show-interests").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-location").css("background", greyButton);
$("#show-coffee").css("background", greyButton);
$("#info-text").html("I am a passionate piano player and also enjoy powerlifting in my spare time!");


})

$("#show-coffee").click(function(){

$(this).css("background", "black");
$("#show-skills").css("background", greyButton);
$("#show-interests").css("background", greyButton);
$("#show-location").css("background", greyButton);
$("#info-text").html("I like my coffee black and sugarless :)");

})
