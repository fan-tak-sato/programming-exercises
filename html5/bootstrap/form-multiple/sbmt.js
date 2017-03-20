function submitForm(formId, btnId) {

	// disable submit button
	$('#'+btnId).disabled='disabled'; 

	// hide form
	$('#'+formId).fadeOut("slow");

	$.ajax({
		type: "POST",
		url: "request.php",
		data: $('#'+formId).serialize(),
		dataType: 'json',
		cache: false,
		async: false,
		success: function(result) {
			$("#result").html(JSON.stringify(result));
		},
		error: function() {
			// TODO open a modal with an error message?
			console.log('Fail!');
		}
	});

}