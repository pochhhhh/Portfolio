//About Page scripts:

var greyButton = "#4B4B4B";
var active = 0;

$("#show-skills").click(function(){

active = 0;

$(this).addClass("active");
$("#show-location").removeClass("active");
$("#show-interests").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");
$("#info-text").fadeOut(function(){
	
	$(this).html("I'm a web developer that enjoys building web applications with JavaScript. I also have some experience with PHP and enjoy learning about MVC architecture.").fadeIn();
	
});

})

$("#show-location").click(function(){

active = 1;

$(this).addClass("active");
$("#show-skills").removeClass("active");
$("#show-interests").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");
$("#info-text").fadeOut(function(){
	
	$(this).html("I am from the UK, based in London - A city which hardly needs any introduction ;)").fadeIn();
	
});
})

$("#show-interests").click(function(){

active = 2;

$(this).addClass("active");
$("#show-skills").removeClass("active");
$("#show-location").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");
$("#info-text").fadeOut(function(){
	
	$(this).html("I am a passionate piano player and also enjoy powerlifting in my spare time!").fadeIn();
	
});

})

$("#show-coffee").click(function(){

active = 3;

$("#more-button").addClass("hidden");
$(this).addClass("active");
$("#show-skills").removeClass("active");
$("#show-location").removeClass("active");
$("#show-interests").removeClass("active");

$("#info-text").fadeOut(function(){
	
	$(this).html("I like my coffee black and sugarless :)").fadeIn();
	
});


})

$("#more-button").click(function(){
	
switch(active){
	
	case 0:
	case 1:
	case 2:
	
	active++;
	
	break;
	
	case 3:
	{
		alert("end");
		
	}
	
}

switch(active){
	
	case 0:
	
$("#show-skills").addClass("active");
$("#show-location").removeClass("active");
$("#show-interests").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");
$("#info-text").html("I'm a web developer that enjoys building web applications with JavaScript. I also have some experience with PHP and enjoy learning about MVC architecture.");


	break;
	
	case 1:
	
	$("#show-location").addClass("active");
$("#show-skills").removeClass("active");
$("#show-interests").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");

$("#info-text").fadeOut(function(){
	
	$(this).html("I am from the UK, based in London - A city which hardly needs any introduction ;)").fadeIn();
	
});

	
	break;
	
	case 2:
	
	$("#show-interests").addClass("active");
$("#show-skills").removeClass("active");
$("#show-location").removeClass("active");
$("#show-coffee").removeClass("active");
$("#more-button").removeClass("hidden");

$("#info-text").fadeOut(function(){
	
	$(this).html("I am a passionate piano player and also enjoy powerlifting in my spare time!").fadeIn();
	
});
	break;
	
	case 3:
	
$("#more-button").addClass("hidden");
$("#show-coffee").addClass("active");
$("#show-skills").removeClass("active");
$("#show-location").removeClass("active");
$("#show-interests").removeClass("active");
	
$("#info-text").fadeOut(function(){
	
	$(this).html("I like my coffee black and sugarless :)").fadeIn();
	
});
	
}


});

//Projects page scripts:

$("#project-a").mouseenter(function(){

$("#simon-game").removeClass("hidden");
$("#simon-game-tech").removeClass("hidden");

$(this).mouseleave(function(){
	
$("#simon-game").addClass("hidden");
$("#simon-game-tech").addClass("hidden");
	
});

	
});
