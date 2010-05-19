new $.jQTouch({
    icon: 'img/icon.png',
    startupScreen: 'img/startup.png',
    statusBar: 'black',
    preloadImages: [
        'js/jqtouch/themes/jqt/img/back_button.png',
        'js/jqtouch/themes/jqt/img/back_button_clicked.png'
    ]
});

$(function() {
	var cache = {},
		speakerName = $('#speakers h1'),
		speaker;

	$('#speakers li a, #schedule li a').bind('touchend', function() {
		speaker = $(this).attr('data-name');
	});
	
	$('#detail').bind('pageAnimationStart', function() {
		var page = $(this), 
			content = cache[speaker], 
			target = page.find('.content').html('<div class="loading">Loading</div>');
			
		speakerName.empty();
		
		if (content) {
			target.html(content);
			return;
		}
		
		target.load('speakers/' + speaker + '.html', function(r) {
			cache[speaker] = r;
		});
	});
	
	$('#sponsors').bind('pageAnimationEnd', function() {
		var target = $(this).find('.content');
		if (target.data('loaded')) { return; }
		
		target.append('<div class="loading">Loading &hellip;</div>');
		target.load('sponsors.html', function() { target.data('loaded', true); });
	});

	$('#parties ul').bind('touchend', function(e) {
		e.preventDefault();
		window.location.href = $(this).find('a').attr('href');
	});
	
	$('#sponsors .content').delegate('a', 'click', function() {
		window.open($(this).attr('href'));
	});
	
});