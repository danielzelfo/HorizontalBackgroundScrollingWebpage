$( document ).ready(function() {
	$("header").css("width", $(".section").css("width"));
});

$( window ).resize(function() {
	$("header").css("width", $(".section").css("width"));
});