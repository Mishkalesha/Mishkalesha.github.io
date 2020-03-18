document.addEventListener("DOMContentLoaded", function() {

	function tabHandler(cls){
		return (e) =>{
			const parent = e.target.closest(cls);
			$(parent).find('.tab-accardion').toggleClass('active')	
			$(parent).find('.fas').toggleClass('fas-active');
		}
	}

	$('.stages-tab').on('click', tabHandler('.stages-tab'));
	$('.faq-tab').on('click', tabHandler('.faq-tab'));

	$('.hamburger').on('click', ()=>{
		$('.hamburger').toggleClass('is-active');
		if( $('.hamburger').hasClass('is-active')){
			$('.overlay').addClass('active-overlay');
		}else{
			$('.overlay').removeClass('active-overlay');
		}
	})
	
});
