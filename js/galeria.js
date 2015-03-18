$(document).ready(function() {
	$.fn.prettyPhoto({
		slideshow: 5000,
		autoplay_slideshow: true,
		show_title: true,
		theme: 'facebook',
		social_tools: '',
		allow_resize: true,
		deeplink: false
	});

	if (screen && screen.width > 480 && window.innerWidth > 480) {
		initializeScrollPane();
	}
	
});


function initializeScrollPane() {
	$('.galeria').jScrollPane({
		verticalDragMaxHeight: 80
	});
}


function showLightbox(indice) {
	var imagenes = $("#imgCliente_" + indice + " input[name='imagenes']").val().split(',');
	var titulos = $("#imgCliente_" + indice + " input[name='titulosImagenes']").val().split(',');
	var descripciones = $("#imgCliente_" + indice + " input[name='descripcionImagenes']").val().split(',');
	
	$.prettyPhoto.open(imagenes,titulos,descripciones);
}