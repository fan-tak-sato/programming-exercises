<?php
    session_start();

    if (!isset($_SESSION['form_token'])) {
        $formToken = uniqid();
        $_SESSION['form_token'] = $formToken;
    }
    
    if (isset($_POST['form_token']))
    {
        if($_POST['form_token'] != $_SESSION['form_token']) {
            $message = 'Access denied';
        } elseif(strlen(trim($_POST['first_name'])) == 0 || strlen(trim($_POST['first_name'])) > 50) {
            $message = 'Invalid First Name';
        } else {
            $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);

            $message = 'Thank you ' . $first_name;

            unset( $_SESSION['form_token'] );
        }
    }
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <link href="../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    
<title>Form With Token</title>
</head>
<body>

<div class="container">
    <?php if (isset($message)): ?>
    <div class="alert alert-warning">
        <h1><?php echo $message ?></h1>
        <div><a href="<?php echo $_SERVER['PHP_SELF'] ?>" title="">View form again</a></div>
    </div>
    <?php else: ?>
    <h1>Form token</h1>
    <p>Here is an example about using a token in HTML forms.</p>
    <form role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" id="first_name" name="first_name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="smbt" class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-10">
                <input type="hidden" name="form_token" value="<?php echo $_SESSION['form_token']; ?>">
                <button type="submit" class="btn btn-primary" id="smbt">Submit</button>
            </div>
        </div>
    </form>
    <?php endif; ?>
    
</div>

</body>
</html>