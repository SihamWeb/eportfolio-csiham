$(document).ready(function () {
	$('.datatable').DataTable({
		"pageLength": 1, 
		"searching": false, 
		"lengthChange": false,
		language: {
            url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'
        }
	});
});

$('label').addClass('mt-2 fw-bold');
$('input[type=text]').addClass('form-control');
$('textarea').addClass('form-control');
$('select').addClass('form-select');
