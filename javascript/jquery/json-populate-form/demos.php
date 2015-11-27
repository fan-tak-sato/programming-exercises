<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Populate Demos</title>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="./jquery.populate.js"></script>
</head>
<body>

<form id="form-1">
	<div>
		<label for="name">Name</label>
		<input id="name" name="name" type="text">
	</div>

	<div>
		<label>
			<input type="checkbox" name="alive" id="alive"> Are you alive?
		</label>
	</div>

	<div>
			<input type="checkbox" name="days[]" value="mon" id="days1"> Monday
			<input type="checkbox" name="days[]" value="tue" id="days2"> Tuesday
	</div>
</form>

<div id="serialize-json"></div>

<button id="populate">Populate</button>
<button id="populate-php">Populate with PHP</button>
<button id="populate-json">Serialize to JSON</button>

<script>
$(function() {
	$('#populate').on('click', function(e) {
		$('#form-1').populate({
			name: 'Peter Pan',
			alive: "on"
		});
	});

	$('#populate-php').on('click', function(e) {
		$('#form-1').populate(<?php echo json_encode(array('name' => 'John', 'alive' => 'on')); ?>);
	});

	$('#populate-json').on('click', function(e) {
		$('#serialize-json').html( JSON.stringify( $('#form-1').serializeArray() ) );
	});
});
</script>

</body>
</html>

