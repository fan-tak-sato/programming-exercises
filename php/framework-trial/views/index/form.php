<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <title>Form compilazione dati</title>
<body>

<div class="container">
    <h1>Compila dati</h1>

    <form class="form-horizontal" action="<?php echo $view_indexPath ?>/index/confirm" method="post" name="frmAnagrafica">

        <div class="form-group">
            <label for="inputCognome" class="col-sm-2 control-label">* Cognome:</label>
            <div class="col-sm-10">
                <input type="text" name="cognome" class="form-control" required="required" id="inputCognome" placeholder="Cognome" value="<?php echo isset($_SESSION['form']['cognome']) ? $_SESSION['form']['cognome'] : null ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">* Nome:</label>
            <div class="col-sm-10">
                <input type="text" name="nome" class="form-control" required="required" id="inputName" placeholder="Nome" value="<?php echo isset($_SESSION['form']['nome']) ? $_SESSION['form']['nome'] : null ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">* Email:</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" required="required" id="inputEmail" placeholder="Email" value="<?php echo isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] : null ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="inviadati" value="Continua" class="btn btn-primary" title="Clicca per procedere">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-10">
                * Campi obbligatori
            </div>
        </div>

    </form>
</div>

</body>
</html>