// JavaScript Document


		$(document).ready(function(){
			$('ul.sf-menu').supersubs({ 
				minWidth:    12,                                // minimum width of sub-menus in em units 
				maxWidth:    27,                                // maximum width of sub-menus in em units 
				extraWidth:  1                                  // extra width can ensure lines don't sometimes turn over 
																	// due to slight rounding differences and font-family 
			}).superfish({ 
				delay:       400,                               // delay on mouseout 
				animation:   {opacity:'show',height:'show'},    // fade-in and slide-down animation 
				speed:       'fast',                            // faster animation speed 
				autoArrows:  false,                             // disable generation of arrow mark-up 
				dropShadows: false                              // disable drop shadows 
			}).children().find('li:first').css('border-top','0px').find('a').css('border-top','0px');
			
			$("#featured .f-item").hover(function(){
				$(this).find(".f-meta").stop().animate({
					top:0
				}, 150);
				}, function(){
				$(this).find(".f-meta").stop().animate({
					top:180
				}, 150);
			});
			
		
			
			var tabContainers = $('div.tabs > div.tabItem');
			var tabNav = $('div.tabnav').find('span.tn-item a');
			tabContainers.hide().filter(':first').show();
			$('div.tabnav span.tn-item a').click(function(){
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('div.tabs .tn-arrow').css('left',this.id + 'px');
				return false;
			});
		});
		
		function equalHeight() {
			var group = $('#posts').find('.col2');
			tallest = 0;
			extended = 0;
			group.each(function() {
				thisHeight = $(this).height();
				if(thisHeight > tallest) {
					tallest = thisHeight;
				}
			});
			group.height(tallest);
		}
		window.onload = equalHeight;