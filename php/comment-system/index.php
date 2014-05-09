<?php

ini_set('session.use_trans_sid', '0');

require('rand.php');

session_start();

$_SESSION['captcha_id'] = $str;

ob_start('htmlCompression');
include_once("config.php");

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Comment system</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<div class="container">

	<h2>Comment system</h2>
	
	<h3>Insert your comment</h3>
	
	<form action="" method="post" id="commentform">
	
		<div class="formleft"><label for="name">Name:</label></div>
		<div><input type="text" name="name" id="name" maxlength="80" title="Insert your name"></div>
		<div class="clearall">&nbsp;</div>
		
		<div class="formleft"><label for="email">Email:</label></div>
		<div><input type="text" name="email" id="email" maxlength="80" title="Insert your email"></div>
		<div class="clearall">&nbsp;</div>

		<div class="formleft"><label for="message">Message:</label></div>
		<div><textarea name="message" rows="8" cols="35" id="message" title="Insert your comment"></textarea></div>
		<div class="clearall">&nbsp;</div>
		
		<!-- Captcha -->
		<div class="formleft">&nbsp;</div>
		<div id="captchaimage"><a href="<?php echo $_SERVER['PHP_SELF']; ?>" id="refreshimg" title="Click to refresh image"><img src="images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" /></a></div>
		<div class="clearall">&nbsp;</div>
		
		<div class="formleft"><label for="captcha">Enter the characters as seen on the image above (case insensitive):</label></div>		
		<div><input type="text" maxlength="6" name="captcha" id="captcha" /></div>
		<div class="clearall">&nbsp;</div>
		
		<div class="formleft">&nbsp;</div>
		<div>
			<input type="submit" id="post" name="submit" value="Insert comment">
		</div>	
		<div class="clearall">&nbsp;</div>
		
	</form>
	
	<div id="commentformresponse"></div>
	
	<div id="showcomment"></div>
	
	<div id="showcomment_include"><?php include_once("commentLoad.php"); ?></div>
	
	<footer>
		<p>&copy; <?php echo date("Y") ?> Andrea Fiori</p>
	</footer>
	
</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>

jQuery(document).ready(function() {
	
	/* Ajax caching and preventing double submit */
	$.ajaxSetup ({
		cache: false,
		async: false
	});
	
	$("#refreshimg").click(function(){
		$.post('newsession.php');
		$("#captchaimage").load('image_req.php');
		return false;
	});
	
	/* Validate */
	$("#commentform").validate({
		rules: {
				name: {
					required: true
					},
				email: {
					required: true,
					email: true
					},
				message: {
					required: true
					},
				captcha: {
					required: true,
					remote: "process.php"
				}
			},
			messages: {
				name: "Insert your name",
				email: {
					required: "Insert a valid email address",
					email: "Insert your email"
				},
				message: "Insert your comment",
				captcha: "Correct captcha is required. Click the captcha to generate a new one"
			},
			submitHandler: function(form) {
				$("#commentform").ajaxSubmit({
					url: '<?php echo $commentInsertFile; ?>',
			        target: '#commentformresponse',
					type: 'post',
			        success: function() {
						/* label.addClass("valid").text("Valid captcha!"); */
						/* reset form */
						$('#commentform')[0].reset();
			        },
					onkeyup: false
				});
			}
	});
	
});
</script>

</body>
</html>
<?php
ob_end_flush();
function htmlCompression($buffer)
{
	$bufferout = $buffer;
	$bufferout = str_replace("\n", "", $bufferout);
	$bufferout = str_replace("\t", "", $bufferout);
	$bufferout = preg_replace('/<!--(.|\s)*?-->/', '', $bufferout);
	return $bufferout;
}
