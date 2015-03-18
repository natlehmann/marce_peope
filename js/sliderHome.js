$(function() {
	$("#slides").slidesjs({
		width : 900,
		height : 350,
		navigation : false,
		pagination : {
			active : true,
			// [boolean] Create pagination items.
			// You cannot use your own pagination. Sorry.
			effect : "slide"
		// [string] Can be either "slide" or "fade".
		},
		play : {
			auto : true
		}
	});
	
	inicializarSliderPequenio("submenuImg-empresa");
	inicializarSliderPequenio("submenuImg-produccion");
	inicializarSliderPequenio("submenuImg-producto");
	inicializarSliderPequenio("submenuImg-servicios");

});


function inicializarSliderPequenio(id) {
	
	$("#" + id).slidesjs({
		width : 241,
		height : 231,
		navigation : false,
		pagination : false,
		play : {
			auto : true,
			effect: "fade"
		}
	});
}
