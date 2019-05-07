$(".expandcont").hide();
$(".expand").click(function(){
	if (typeof this.exp == 'undefined') {
		this.exp = false;
	}
	if (!this.exp){
		this.exp = true;
		$( this ).text("show less");
		$( this ).parent().find(".expandcont").show();
	}else{
		this.exp = false;
		$( this ).text("show more");
		$( this ).parent().find(".expandcont").hide();
	}
});

function hideHeader(){
	$("header").animate({
		top: '-110px',
		opacity: '0'
	}, 1000);
	dirup = false;
	dirdown = true;
}
function showHeader(){
	$("header").animate({
		top: '0',
		opacity: '1'
	}, 1000);
	dirup = true;
	dirdown = false;
}
var dirup = true, dirdown = true, clickedA = false;
window.onscroll = function(e) {
	if(this.oldScroll > this.scrollY){
		if (dirdown && !clickedA && !$("header").is(':animated') && $("header").css("top") != "0px"){
			showHeader();
		}
	}else{
		if (dirup && !clickedA && !$("header").is(':animated') && $("header").css("top") == "0px"){
			hideHeader();
		}
	}
	this.oldScroll = this.scrollY;
	if($(window).scrollTop() == 0 && $("header").css("top") != "0px"){
		showHeader();
	}
};

$("header a").click(function(){
	clickedA = true;
	hideHeader();
	setTimeout(function(){
		clickedA = false;
	}, 1500);
});