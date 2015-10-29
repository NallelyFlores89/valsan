var controller;
$(document).ready(function(){
	controller = new ScrollMagic();
	// var tween = TweenMax.to("#home-modulo-1", 0.5, {scale: 0.8});
	// var tween = TweenMax.staggerTo(".home-modulos", 1, {rotation:360, y:20}, 0.5);

	var tween = TweenMax.staggerTo("#prod-img-1 ", 0.5, {rotation:360, y:0}, 0.1);
	var tween2 = TweenMax.staggerTo("#prod-img-2 ", 0.5, {rotation:360, y:0}, 0.1);
	var tween3 = TweenMax.staggerTo("#prod-img-3 ", 0.5, {rotation:360, y:0}, 0.1);
	var tween4 = TweenMax.staggerTo("#qs-logo-1", 0.5, {rotation:360, y:0}, 0.1);
	var tween5 = TweenMax.staggerTo("#qs-logo-2", 0.5, {rotation:360, y:0}, 0.1);
	var tween6 = TweenMax.staggerTo("#qs-logo-3", 0.5, {rotation:360, y:0}, 0.1);
	var tween7 = TweenMax.staggerTo("#qs-logo-4", 0.5, {rotation:360, y:0}, 0.1);
	var tween8 = TweenMax.staggerTo("#qs-logo-5", 0.5, {rotation:360, y:0}, 0.1);
	var tween9 = TweenMax.staggerTo("#qs-logo-6", 0.5, {rotation:360, y:0}, 0.1);
	var tween10 = TweenMax.staggerTo("#qs-logo-7", 0.5, {rotation:360, y:0}, 0.1);
	var tween11 = TweenMax.staggerTo("#qs-logo-8", 0.5, {rotation:360, y:0}, 0.1);
	// build scene

	var scene = new ScrollScene({triggerElement: "#prod-img-1"})
					.setTween(tween)
					.addTo(controller);
	var scene2 = new ScrollScene({triggerElement: "#prod-img-2"})
					.setTween(tween2)
					.addTo(controller);
	var scene3 = new ScrollScene({triggerElement: "#prod-img-3"})
					.setTween(tween3)
					.addTo(controller);					
	
	var scene4 = new ScrollScene({triggerElement: "#qs-logo-1"})
					.setTween(tween4)
					.addTo(controller);						

	var scene5 = new ScrollScene({triggerElement: "#qs-logo-2"})
					.setTween(tween5)
					.addTo(controller);						

	var scene6 = new ScrollScene({triggerElement: "#qs-logo-3"})
					.setTween(tween6)
					.addTo(controller);	

	var scene7 = new ScrollScene({triggerElement: "#qs-logo-4"})
					.setTween(tween7)
					.addTo(controller);						

	var scene8 = new ScrollScene({triggerElement: "#qs-logo-5"})
					.setTween(tween8)
					.addTo(controller);	

	var scene9 = new ScrollScene({triggerElement: "#qs-logo-6"})
					.setTween(tween9)
					.addTo(controller);	

	var scene10 = new ScrollScene({triggerElement: "#qs-logo-7"})
					.setTween(tween10)
					.addTo(controller);																

	var scene11 = new ScrollScene({triggerElement: "#qs-logo-8"})
					.setTween(tween11)
					.addTo(controller);						
	$("form")[0].reset();

/*	$(".home-modulos") .mouseover(function() {
		$(this).find("span").slideToggle();
	}).mouseout(function() {
		$(this).find("span").slideToggle();
	});	*/

})