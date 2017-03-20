<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="keywords" content="">
    <meta name="author" content="">

    <title>Call to action with forms and multiple submit</title>

    <link href="../../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
	
	<h1>Call to action with forms and multiple submit</h1>
	
	<p>Ajax form submit avoiding double submit and POST.</p>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form id="form-1" action="" method="post" role="form">
				<input type="hidden" name="id" value="1">
				<button type="button" id="button-1" class="btn btn-primary" onclick="submitForm('form-1', 'button-1')">Submit</button>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form id="form-2" action="" method="post" role="form">
				<input type="hidden" name="id" value="2">
				<input type="hidden" name="idabc" value="2">
				<button type="button" id="button-2" class="btn btn-primary" onclick="submitForm('form-2', 'button-2')">Submit</button>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form id="form-3" action="" method="post" role="form">
				<input type="hidden" name="id" value="3">
				<input type="hidden" name="idabc" value="3">
				<button type="button" id="button-3" class="btn btn-primary" onclick="submitForm('form-3', 'button-3')">Submit</button>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form id="form-4" action="" method="post" role="form">
				<input type="hidden" name="id" value="4">
				<input type="hidden" name="idabc" value="4">
				<button type="button" id="button-4" class="btn btn-danger" onclick="submitForm('form-4', 'button-4')">Error</button>
			</form>
		</div>
	</div>
	
	<div id="result"></div>
</div>


<script src="../../../common/jquery/jquery.min.js"></script>

<script>

/*
$.ajaxPrefilter(function(options, original_Options, jqXHR) {
    options.async = true;
});
*/

function submitForm(formId, btnId) {
	// e.preventDefault();
	
	// disable submit button
	$('#'+btnId).disabled = 'disabled'; 

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
</script>

<script src="../../../common/bootstrap3/js/bootstrap.min.js"></script>

</body>
</html>