<?php
if ( isset($_POST['palindrome']) ) {
    require_once("function.php");
    
    $isSubmitted = 1;
    
    $palindrome = filter_var($_POST['palindrome'], FILTER_SANITIZE_STRING);
	
	try {
		$nextPalindrome = nextPalindrome($palindrome);
	} catch(Exception $e) {
		$exceptionError = $e->getMessage();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Next palindrome number</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <div class="container">
        
        <h1>Type a number and search the next palindrome</h1>

        <form role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="palindrome">Your number:</label>
                <input type="text" class="form-control" name="palindrome" id="palindrome" title="Type a number" value="">
            </div>
            <input type="submit" class="btn btn-primary" name="searchButton" value="Search" title="">
        </form>
		<div>&nbsp;</div>
		
		<?php if (isset($nextPalindrome)): ?>
		<div class="alert alert-info">
		<h3>Next Palidrome Number to <?php echo $palindrome ?> is <?php echo $nextPalindrome ?></h3>
		</div>
		<?php endif; ?>
                
		<?php if (isset($exceptionError)): ?>
		<div class="alert alert-danger">
		<h1>An error occurred:</h1>
		<div><?php echo $exceptionError; ?></div>
		</div>
		<?php endif; ?>

        <hr>
        
        <div>&copy; <?php echo date("Y"); ?> <a href="http://www.andreafiori.net" target="_blank" title="Andrea Fiori's website">Andrea Fiori</a></div>
        
    </div>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>