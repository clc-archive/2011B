<div class="widgeteme">
	<h2><a href="/events/">Featured Events:</a></h2>                 
	  <?php eme_get_events_list("limit=4&scope=future&order=ASC&category=3&paging=0&location_id=all&format=
		<h3>#_LINKEDNAME</h3>
		[events_if tag='#_ATT{WidgetTimeDisplay}' value='1']
			<h4>#_ATT{WidgetTime}</h4>
		[/events_if]
		[events_if tag='#_ATT{WidgetTimeDisplay}' notvalue='1']
		<h4>#D, #M #j - #_ATT{EndDateWidget}  #g:#i#a</h4>
		[/events_if]
	"); ?>	
</div><!--end of events widget-->