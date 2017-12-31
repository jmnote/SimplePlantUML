$.getScript('//cdn.rawgit.com/jmnote/plantuml-encoder/aee9f1be/dist/plantuml-encoder.min.js').done( function() {
	$('uml').each(function() {
		$(this).replaceWith($('<img>').attr('src','//www.plantuml.com/plantuml/img/'+window.plantumlEncoder.encode($(this).text())));
	})
});
