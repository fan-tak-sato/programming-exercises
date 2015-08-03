<?php

if (!empty($_POST)) {
	var_dump($_POST); // accept will be "on" if checked!
}

?>
<form method="post" action="">
	<input type="checkbox" name="accept"> Check me!
	<input type="submit" value="Proceed">
<form>

