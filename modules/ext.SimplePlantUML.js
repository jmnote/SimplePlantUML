(window.RLQ=window.RLQ||[]).push(function() {
	$('uml').each(function() {
		$(this).replaceWith($('<img>').attr('src','//www.plantuml.com/plantuml/img/'+plantumlEncoder.encode($(this).text())));
	})
})