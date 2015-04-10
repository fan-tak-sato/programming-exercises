<?php

function generateHash($plainText, $salt = null, $saltLength = 9)
{
	if ($salt === null) {
		$salt = substr(md5(uniqid(rand(), true)), 0, $saltLength);
	} else {
		$salt = substr($salt, 0, $saltLength);
	}

	return $salt . sha1($salt . $plainText);
}

$mdfive = md5("Andrea");
$salt = 'MyRandomString'; // this can be a stored uniqid()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="keywords" content="">
    <meta name="author" content="">

    <title>Md5 with Salt</title>

    <link href="../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">

	<h1>Md5 with Salt</h1>

	<p>Given a md5 string or a list of encrypted md5 password, I want to secure the passwords adding a salt.</p>
	<p>You don't know the original password, just add the salt to final encryption.</p>
	<?php
	echo sha1($salt.$mdfive)."<br>";
	
	echo sha1($salt.md5("Andrea"))."<br>";
	?>
	
	<p>Using a function to generate the Hash</p>
	
	<?php echo generateHash("Andrea"); ?>
	<br>
	
	<h2>Resources</h2>
	<ul>
		<li><a href="http://php.net/manual/en/function.hash.php" target="_blank">http://php.net/manual/en/function.hash.php</a></li>
		<li><a href="http://stackoverflow.com/questions/14538034/md5-salt-password-php" target="_blank">http://stackoverflow.com/questions/14538034/md5-salt-password-php</a></li>
		<li><a href="http://en.wikipedia.org/wiki/Security_through_obscurity" target="_blank">http://en.wikipedia.org/wiki/Security_through_obscurity</a></li>
		<li><a href="http://en.wikipedia.org/wiki/Cipher" target="_blank">http://en.wikipedia.org/wiki/Cipher</a></li>
		<li><a href="http://www.mathstat.dal.ca/~selinger/md5collision/" target="_blank">Md5 collision</a></li>
		<li><a href="http://en.wikipedia.org/wiki/MD5" target="_blank">http://en.wikipedia.org/wiki/MD5</a></li>
		
	</ul>
	
</div>

</body>
</html>