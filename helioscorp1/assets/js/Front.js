function Traer(url, output){
	url = (!url || url=='') ? false : url
	if(!url){ Alert('error', 'Error 404', 'Not Found'); return false; }
	$.ajax({
		url: 'views/'+url,
		type: 'GET',
		dataType: 'HTML',
		cache: false,
	})
	.done(function(done) {
		$('div.container-fluid, header').removeClass('d-none')
		$('div.container-fluid, header').addClass('d-none')
		$('#PRINCIPAL').html(done);
		$('div[role="dialog"]').each(function() {
			$(this).modal('hide');
		});
		$('.modal-backdrop').remove();
		$(".navbar-collapse").collapse('hide');
		$('div[role="calendar"]').remove();
		$('body').removeAttr('style');
		$('html')[0].scrollIntoView({behavior: 'smooth'});
		if(output){output(true)};
	})
	.fail(function(e) {
		console.log(e.statusText);
	});
}