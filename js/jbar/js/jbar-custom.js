/*
	jBar v1.0.0
	by Todd Motto: http://www.toddmotto.com
	Latest version: https://github.com/toddmotto/jBar

	The jBar plugin, a simple and lightweight notification banner.
*/

;(function ($) {

	$.jBar = function(options) {
	
		// jBar Defaults
		var defaults = {
			type             : 'fixed', // Fixed/Static
			delay            : '1200', // In milliseconds
           	buttonText: '<img src=\'http://clctrust.org/images/graphics/connection-sidebar.png\' width=\'28px\' class=\'noshadow\' style=\'padding:0px 4px; vertical-align: top\' >Attend the Country Barbecue', // Button Text
	        buttonLink: 'http://clctrust.org/events/137/2013-country-barbecue/' // Hyperlink from button
		};
		
		// jBar Options
		var options = $.extend(defaults, options);
		
		// Shorten Option Names
	    var type             = options.type,
	    	delay            = options.delay,
	    	buttonText       = options.buttonText,
	    	buttonLink       = options.buttonLink;

		// jBar Markup
		var jbar_html = '<div id="jbar" class="jbar">' + '<span class="jbar-cta">'
					  + '<p class="text">' + '<a href="' + buttonLink + '" onClick="_gaq.push([\'_trackEvent\', \'Links\', \'Donate\', \'Jbar\']);" >'
					  + buttonText + '</a></p>' + '<p class="downarrow"><img src="/js/jbar/img/arrow-up.png" class="jtrigger arrow" alt="Arrow Up"></p>'
					  + '</span></div>' + '<span class="jribbon"><img src="/js/jbar/img/arrow-down.png" class="arrow jtrigger" alt="Arrow Down"></span>';

	    // jBar Styles
	    var styles = '';
	    	
	    // Append Styles to <head>
		$('head').append(styles);

		// Prepend jBar to <body>
		$('body').prepend(jbar_html);

		// Options 'Top' and 'Fixed' are selected
		if (type == 'fixed') {
		
			// Add class 'position-top-fixed'
			$('#jbar').addClass('position-top fixed');
			$('.jribbon').addClass('fixed');
			
			// Initial Animation
	        $('body').prepend('<div id="jbar-push" style="height:46px;display:none;" />');
	        $('#jbar, #jbar-push').delay(delay).slideDown(400);
	        
	        // User Animation
	        $('.jtrigger').click(function(){
	        	$('#jbar-push').slideToggle();
	        	$('#jbar').slideToggle();
	        	$('.jribbon').slideToggle(200);
	        });
	        
		}
		
		// Options 'Top' and 'Static' are selected
		if (type == 'static') {
		
			// Add class 'position-top-fixed'
			$('#jbar').addClass('position-top');
			$('.jribbon').addClass('static');
			
			// Initial Animation
	        $('#jbar').delay(delay).slideDown(300);
	        
	        // User Animation
	        $('.jtrigger').click(function(){
	        	$('#jbar').slideToggle();
	        	$('.jribbon').slideToggle(200);
	        });
			
		}

    };

})(jQuery);