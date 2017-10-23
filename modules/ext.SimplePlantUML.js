$.getScript('//cdn.rawgit.com/markushedvall/plantuml-encoder/aae868f9/dist/plantuml-encoder.min.js').done( function() {
	$('uml').each(function() {
		$(this).replaceWith($('<img>').attr('src','//www.plantuml.com/plantuml/img/'+window.plantumlEncoder.encode($(this).text())));
	})
});
