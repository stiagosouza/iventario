$(document).ready(function() {

	$('.nav li:first').on('click', function(e) {
		e.preventDefault();

		$(this).addClass('active').next('li').removeClass('active');

		$('section article').hide();
		$('section article:first').show();

		$('#titleContent').text('Registrar Equipamento');
	})

	$('.nav li:last').on('click', function(e) {
		e.preventDefault();

		$(this).addClass('active').prev('li').removeClass('active');

		$('section article').hide();
		$('section article:last').show();

		$('#titleContent').text('Buscar Equipamento');

	})

	/* Incluir os eventos de TAB Search */
	var table = $('table').dataTable({
			"bJQueryUI" : true,
			"bRetrieve" : true,
			"sPaginationType" : "full_numbers"
		})


	$('table tr').on('click', function() {
		$('#aSearch .row-fluid').show();
	})

	$('#searchBarcode').barcode("1234567890128","ean13",{barWidth:1, barHeight:70, output: "canvas"});
	/* Incluir os eventos de  TAB Search */

	$('form').on('submit', function() {

		
	})

})