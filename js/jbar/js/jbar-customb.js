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
					  + '<p class="text">' + calltoAction + '<a href="' + buttonLink + '">'
					  + buttonText + '</a></p>' + '<p class="downarrow"><img src="/js/jbar/img/arrow-up.png" class="jtrigger arrow" alt="Arrow Up"></p>'
					  + '</span></div>' + '<span class="jribbon"><img src="/js/jbar/img/arrow-down.png" class="arrow jtrigger" alt="Arrow Down"></span>';

	    // jBar Styles
	    var styles = '<style>' + '.jbar{background:' + backgroundColor + ';top:0;left:0;right:0;height:46px;z-index:999998;color:#FFF;border-bottom:3px solid ' + borderColor + ';display:none;}'
	    		   + '.jbar-cta{display:block;max-width:1280px;margin:0 auto;padding:0px;}'
	    		   + '.jribbon{padding:5px 2px 0;z-index:999999;top:0;right:4%;display:none;width:38px;text-align:center;background:' + backgroundColor + ';border:3px solid #FFF;'
	    		   + 'border-top:none;box-shadow:0 2px 5px #333;color:#FFF;cursor:pointer;border-radius:0 0 3px 3px;}' 
	    		   + '.downarrow{top:11px;right:4%;width:50px;text-align:center;position:absolute;}' + '.jribbon:hover{cursor:pointer;}' 
	    		   + '.text{display:block;padding:15px;text-align:center;}' + '.text a{text-decoration:none;color:' 
	    		   + buttonTextColor + ';margin:0 10px;padding:10px 30px;background:' + buttonColor + ';border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}' 
	    		   + '.text a:hover{background:' + buttonColorHover + ';}.arrow{cursor:pointer;}.fixed{position:fixed;}.static{position:absolute;}</style>';
	    	
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