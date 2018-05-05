$(function(){
	// Ajax setup
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});
	// Enable hamburger menu on all xs screens
	$('#burger-container').on('click', function(){
		$(this).toggleClass('open');
	});
});
