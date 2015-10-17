window.onload = function() {
	// toggle menu
	$("#toggle").click(function() { 
		jQuery("nav").slideToggle();
		return false;
	});
	//
	
	// show hide toggle at resolution
	$(window).resize(function(){

		if ($(window).width() > 801) {
			$("nav").css('display', 'block');
		}
		
		if ($(window).width() < 801) {
			$("nav").css('display', 'none');
		}
		
	});	
	//
	
	//spotlight fade-ins
	$('#word-one').fadeIn(3000);
	$('#word-two').delay(3000).fadeIn(3000);
	$('#word-three').delay(6000).fadeIn(3000);
	//

};