<?php

if (basename($PHP_SELF)==__FILE__)
{
	header("Location: index.php");
	exit;
}

include_once("config.php");

$error = '';
if (!$_POST['name'])
	$error .= 'No name were inserted';

if (!$_POST['email'])
	$error .= 'No email were inserted';
	
if  (!$_POST['message'])
	$error .= 'No message were inserted';

if ($error)
{
	?>
	<div class="msgError">
		<div>Error\s occured</div>
		<?=$error?>
	</div>
	<?php
	exit;
}

// Check if email user exists
$qCheck = "SELECT id FROM users WHERE email = :email ";
$resultUser = R::getAll($qCheck, array(':email' => $_POST['email']) );

if ($resultUser)
{
	$idUser = $resultUser[0]['id'];
} else {
	// Otherwise insert it on db
	$user = R::dispense('users');
	$user->name = $_POST['name'];
	$user->email = $_POST['email'];
	$idUser = R::store($user);
}

if ($idUser)
{
	// Insert comment
	$comment = R::dispense('comments');
	$comment->message = $_POST['message'];
	$comment->rifuser = $idUser;
	$idComment = R::store($comment);
	
	if ($idComment)
	{
		// success
	} else {
		// errors
		exit;
	}
}

?>
<script>

function refreshComments()
{
	$('#showcomment_include').fadeOut('slow').load( '<?php echo $commentLoadFile; ?>' ).fadeIn("slow");
}

jQuery(document).ready(function() {
	refreshComments();
});

</script>
