<?php
session_start();

if ( !empty($view_formPost) ):
    $_SESSION['form'] = $view_formPost;
elseif ( empty($_SESSION['form']) ):
    header("Location: $view_indexPath");
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
        .rowGrid {
            width: 60%
        }
        .col-sm-2, .col-sm-10 {
            padding-top: 1%;
            padding-bottom: 1%;
        }
        .alert h1 {
            margin: 0;
            padding: 1% 0 1% 0;
        }
    </style>
    <title>Conferma dati</title>
<body>

<div class="container">
<?php

if (isset($view_formError)):
    ?>
    <br>
    <div class="alert alert-danger">
        <h1>Errori verificati</h1>
        <?php
        foreach($view_formError as $error):
            ?>
            <div><?php echo $error ?></div>
            <?php
        endforeach;
        ?>
       <br> <a href="<?php echo $view_indexPath ?>/index/form/" class="btn btn-danger" title="Torna indietro">Indietro</a>
    </div>
    <?php
elseif (isset($_SESSION['form']['nome'])):
    ?>
    <h1>Riepilogo dati</h1>

    <div class="row rowGrid">
        <div class="col-sm-2"><strong>Nome: </strong></div>
        <div class="col-sm-10"> <?php echo $_SESSION['form']['nome'] ?></div>
    </div>

    <div class="row rowGrid">
        <div class="col-sm-2"><strong>Cognome: </strong></div>
        <div class="col-sm-10"> <?php echo $_SESSION['form']['cognome'] ?></div>
    </div>

    <div class="row rowGrid">
        <div class="col-sm-2"><strong>Email: </strong></div>
        <div class="col-sm-10"> <?php echo $_SESSION['form']['email'] ?></div>
    </div>

    <form action="<?php echo $view_indexPath ?>/index/process" method="post">
        <div class="row rowGrid">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-10">
                <label for="chkaccept"><input type="checkbox" id="chkaccept" value="1" name="chkaccept" required="required"> Accetta</label>
            </div>
        </div>

        <div class="row rowGrid">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-10">
                <div>
                    <input type="hidden" name="nome" value="<?php echo $_SESSION['form']['nome'] ?>">
                    <input type="hidden" name="cognome" value="<?php echo $_SESSION['form']['cognome'] ?>">
                    <input type="hidden" name="email" value="<?php echo $_SESSION['form']['email'] ?>">
                    <input type="submit" class="btn btn-primary" value="Continua">
                    <a href="<?php echo $view_indexPath ?>/index/form/" class="btn btn-default" title="Torna indietro">Indietro</a>
                </div>
            </div>
        </div>

    </form>

    <?php
else:
    ?>
    <br>
    <div class="alert alert-danger">
        <h1>Errore verificato</h1>
        <div>Impossibile accedere direttamente a questa pagina.</div>
    </div>
    <?php
endif;

?>
</div>

</body>
</html>
