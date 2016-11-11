$(document).ready(function(){
	//baner slider						   
$('.banner .bannerSlider').bxSlider({
	controls:true,
	speed:3000,
	minSlides: 1,
	maxSlides: 1,
	moveSlides: 1,
	mode:'fade',
	autoHover:false,
	pause:6000,
	auto:true
});
//baner slider
//testmonials slider						   
$('.portSlider ul').bxSlider({
	controls:true,						 
	minSlides: 4,
	maxSlides: 4,
	slideMargin:10,
	slideWidth:236,
	pause:4000,
	moveSlides: 1,
	auto:true
});

$('.testBox ul').bxSlider({
	controls:true,						 
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	pause:4000,
	moveSlides: 1,
	auto:true
});


$('.clientCon ul').bxSlider({
	  minSlides: 1,
	  maxSlides: 10,
	  slideWidth: 260,
	  slideMargin: 0,
	  ticker: true,
	  tickerHover:true,
	  useCSS:false,
	  responsive:true,
	  speed: 15000	
});
	//testmonials slider
	
	
	});
var scrolTopflg1  =  1;
//var logoh = $("header").height();
$(window).scroll(function() {  
		if($(window).width() > 767){				  
 	var scrollAmnt1 = $(window).scrollTop();
		if (scrollAmnt1 > 1) {
			if(scrolTopflg1 == 1)
			{
				$("header").addClass("hfixed");
				$("header.hfixed").css("top","-200px");
				$("header.hfixed").animate({top: "0"},800);
				scrolTopflg1 = 0;
			}
		}
		else{
		  $("header").removeClass("hfixed");
		   scrolTopflg1 = 1;
		}  
	  }
}); 

$(document).ready(function(){

	$(".toggle").click(function(){
	$(".navCon").fadeIn(400);
	$("body").css("overflow", "hidden");
	});
	$(".close").click(function(){
	$(".navCon").fadeOut(400);
	$("body").css("overflow", "auto");
	});

	
	

	if($(window).width() >= 1024){
		$(".subMenu").hover(function(){
			$(this).find(".subMenuCon").stop().slideToggle(200);	
		});
	}
	else
	{
		$(".subMenu").click(function(){
			if(!$(this).hasClass("open")){
				$(".subMenuCon").slideUp(200);
				$(this).find(".subMenuCon").slideDown(200);
				$(".subMenu").removeClass("open");
				$(this).addClass("open");
			}
			else
			{
				$(this).removeClass("open");
				$(this).find(".subMenuCon").slideUp(200);
				}
		});

	}

	$(".topTab li").click(function(){
		var ind = $(this).index() + 1;
		$(".topTab li").removeClass("actv");
		$(this).addClass("actv");
		$(".tab").hide();
		$("#tab" + ind).show();	
	});	
});


