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

	$('#speakers li a, #schedule li a').bind('touchend click', function() {
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
	
	$('#sponsors').bind('pageAnimationStart', function() {
		var target = $(this).find('.content');
		if (target.data('loaded')) { return; }
		
		target.html('<div class="loading">Loading &hellip;</div>');
		target.load('sponsors.html', function() { target.data('loaded', true); });
	});

	$('#directions a').bind('click', function(e) {
		$(this).removeClass('active');
	});
	
	$('#sponsors .content').delegate('a', 'click', function() {
		window.open($(this).attr('href'));
	});
	
	$('#detail .content').delegate('a.rate', 'click', function() {
		window.open($(this).attr('href'));
	});
	
});