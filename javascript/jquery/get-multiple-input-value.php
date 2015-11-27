<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252">

	<title></title>

	<link href="../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<h3></h3>

	<p></p>
	
	<form action="" method="post" role="form">

		<table width="100%" class="table table-bordered">
		<tr>
			<td>
				<input name="names[]" type="text" class="names" value="Andy">
				<input name="surnames[]" type="text" class="surnames" value="Warhol">
				<button class="buttonget" type="button">Get it!</button>
			</td>
		</tr>
		<tr>
			<td>
				<input name="names[]" type="text" class="names" class="names" value="John">
				<input name="surnames[]" type="text" class="surnames" value="Doe">
				<button class="buttonget" type="button">Get it!</button>
			</td>
		</tr>
		</table>

		<!-- <button id="btnsbmt" type="submit">Submit</button> -->
	</form>

	<?php
	if ($_POST) var_dump($_POST);
	?>
</div>

<script src="../../common/jquery/jquery.min.js"></script>
<script src="../../common/bootstrap3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
	$('.buttonget').click(function() {
		
		// alert( $(this).prev('input').val() ); OK
		// alert( $(this).prev('.surnames').val() ); OK
		// alert( $(this).prevAll('.names').val() ); OK
		
		// alert( $(this).prev(".targa").val() );
		
		/* Get all values:
		$('.names').each(function() {
			alert($(this).val());
		});
		*/
	});
});
</script>
	
</body>
</html>
