$(document).ready(function(){

	$('.irArriba').click(function(){
		$('body, html').animate({
			scrollTop:'0px'
		});
	});

	$(window).scroll(function(){

		if( $(this).scrollTop() > 400){

			$('.irArriba').slideDown(200);
		}else{
			$('.irArriba').slideUp(300);
		}
	});
});