<?php

session_start();

if (empty($_SESSION['form'])):
    header("Location: ".$view_indexPath);
    exit;
endif;

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
    <style>
        .alert h1 {
            margin: 0;
            padding: 1% 0 1% 0;
        }
    </style>
    <title>Inserimento dati anagrafica</title>
<body>

    <div>&nbsp;</div>

    <div class="container">
    <?php if (isset($view_errorUncheck)): ?>
        <div class="alert alert-danger">
            <h1>Errore accettazione dati</h1>
            <p>Occorre accettare i dati inseriti nel form precedente per proseguire con l'elaborazione</p>
            <br>
            <div><a href="<?php echo $view_indexPath ?>/index/confirm" class="btn btn-danger">Indietro</a></div>
        </div>
    <?php elseif (isset($view_saved)): ?>
        <div class="alert alert-success">
            <h1>Dati inviati correttamente</h1>
            <p>I dati sono stati processati dal sistema</p>
            <br>
            <div><a href="<?php echo $view_indexPath ?>" class="btn btn-success">Torna alla pagina iniziale</a></div>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            <h1>Errore elaborazione dati</h1>
            <p>Si &egrave; verificato un errore di elaborazione dati. Riprovare pi&ugrave; tardi o contattare l'amministrazione</p>
            <br>
            <div><a href="<?php echo $view_indexPath ?>" class="btn btn-danger">Torna alla pagina iniziale</a></div>
        </div>
    <?php endif; ?>
    </div>

</body>
</html>
<?php

if (!isset($view_errorUncheck)):
    session_destroy();
endif;
