<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <link href="../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    
	<title>Multiple row posts</title>
</head>

<body>

<div class="container">

<h1>Multiple row posts</h1>
<p>After submitting the following form, you will be able to access every single form value with a foreach loop</p>

<form action="" method="post">
	<table border="0" class="table table-bordered">
	<tr>
		<td>Name:</td>
		<td><input type="text" name="row[1][name]" value="<?php echo isset($_POST['row'][1]['name']) ? $_POST['row'][1]['name'] : ''; ?>"></td>
		<td>Surname:</td>
		<td><input type="text" name="row[1][surname]" value="<?php echo isset($_POST['row'][1]['surname']) ? $_POST['row'][1]['surname'] : ''; ?>"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="row[2][name]" value="<?php echo isset($_POST['row'][2]['name']) ? $_POST['row'][2]['name'] : ''; ?>"></td>
		<td>Surname:</td>
		<td><input type="text" name="row[2][surname]" value="<?php echo isset($_POST['row'][2]['surname']) ? $_POST['row'][2]['surname'] : ''; ?>"></td>
	</tr>
	<tr>
		<td colspan="4"><input type="submit" name="sbmt" value="Submit" class="btn btn-primary"></td>
	</tr>
	</table>
</form>

<?php
if (!empty($_POST)) {
	?>
	<h2>Result:</h2>
	
	<?php
	foreach($_POST['row'] as $row) {
		?>Name: <?php echo $row['name']; ?><br><?php
		?>Surname: <?php echo $row['surname']; ?><br><br><?php
	}
}
?>

</div>

</body>
</html>