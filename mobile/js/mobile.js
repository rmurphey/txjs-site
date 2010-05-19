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
	var TXJS = { cache : {} };
	
	$('#speakers li a, #schedule li a').bind('click', function() {
		TXJS.speaker = $(this).attr('data-name');
	});
	
	$('#detail').bind('pageAnimationEnd', function() {
		var page = $(this), 
			content = TXJS.cache[TXJS.speaker], 
			target = page.find('.content').empty(),
			doTitle = function() {
				page.find('.toolbar h1').text(target.find('h2').remove().text());
			};
		
		if (content) {
			target.html(content);
			doTitle();
			return;
		}
		
		target.load('speakers/' + TXJS.speaker + '.html', function(r) {
			TXJS.cache[TXJS.speaker] = r;
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