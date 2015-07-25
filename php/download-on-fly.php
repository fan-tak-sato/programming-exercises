<?php
header('Content-type: text/plain');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"my-file.txt");
?>
Hello this is the content of the file I'm forcing to download on the fly with PHP!