$(document).ready(function() {
	
	$('a.dot').click(function(){

		$('a.dot').removeClass('selected');
		$(this).addClass('selected');
		
		
		var city = '.city_detail#' + $(this).attr("name");
		var htmlCode = $(city).html();

		$('.detail_container').fadeOut(500, function(){
			$('.detail_container .city_detail').html(htmlCode);
			$('.detail_container').fadeIn(500);
		});

	});

});