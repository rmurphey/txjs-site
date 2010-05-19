new $.jQTouch({
    icon: 'img/icon.png',
    startupScreen: 'img/startup.png',
    statusBar: 'black',
    preloadImages: [
        'js/jqtouch/themes/jqt/img/back_button.png',
        'js/jqtouch/themes/jqt/img/back_button_clicked.png'
        // 'js/jqtouch/themes/jqt/img/button_clicked.png',
        // 'js/jqtouch/themes/jqt/img/grayButton.png',
        // 'js/jqtouch/themes/jqt/img/whiteButton.png',
        // 'js/jqtouch/themes/jqt/img/loading.gif'
        ]
});

$(function() {
	var cache = {},
		speakerName = $('#speakers h1'),
		speaker;

	$('#speakers li a, #schedule li a').bind('click', function() {
		speaker = $(this).attr('data-name');
	});
	
	$('#detail').bind('pageAnimationStart', function() {
		if (!speaker) { return; }
		
		var page = $(this), 
			content = cache[speaker], 
			target = page.find('.content').html('<div class="loading">Loading</div>'),
			doTitle = function() {
				page.find('.toolbar h1').text(target.find('h2').remove().text());
			};
			
		speakerName.empty();
		
		if (content) {
			target.html(content);
			doTitle();
			return;
		}
		
		target.load('speakers/' + speaker + '.html', function(r) {
			cache[speaker] = r;
			doTitle();
		});
	});
	
	$('#sponsors').bind('pageAnimationEnd', function() {
		var target = $(this).find('.content');
		if (target.data('loaded')) { return; }
		
		target.append('<div class="loading">Loading &hellip;</div>');
		target.load('sponsors.html', function() { target.data('loaded', true); });
	});

	$('#parties ul').bind('click', function(e) {
		e.preventDefault();
		window.location.href = $(this).find('a').attr('href');
	});
	
});