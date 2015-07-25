<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Demo jQuery Sortable per riordinare elementi - AJAX e PHP</title>

<style>
* {	margin: 0; padding: 0; }

body {
	font-size:13px;
	font-family:Arial, Helvetica, sans-serif;
	padding: 40px; 
}

#info {
	display: block;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #333;
	background-color: #efefef;
}

#lista-prova {
	list-style: none;
}

#lista-prova li {
	display: block;
	padding: 5px 10px;
	margin-bottom: 3px;
	background-color: #efefef;
	background-image: -moz-linear-gradient(top, #efefef, #e1e1e1);
	background-image: -webkit-gradient(linear, left top,left bottom, from(#efefef), to(#e1e1e1));
	background-image: linear-gradient(top, #efefef, #e1e1e1);
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr=#efefef, EndColorStr=#e1e1e1); /* vale solo per IE */
	text-shadow:1px 1px 0 #fff;
	-moz-text-shadow:1px 1px 0 #fff;
	-webkit-text-shadow:1px 1px 0 #fff;
	color:#ff8400;
	}
#lista-prova li:first-child {
	border-radius:15px 15px 0 0;
	-moz-border-radius:15px 15px 0 0;
	-webkit-border-radius:15px 15px 0 0;
	}
#lista-prova li:last-child {
	border-radius:0 0 15px 15px;
	-moz-border-radius:0 0 15px 15px;
	-webkit-border-radius:0 0 15px 15px;
	}

#lista-prova li img.trascinabile {
	margin-right: 20px;
	cursor: move;
	vertical-align:middle;
}
#lista-prova li strong {
	vertical-align:middle;
	}
</style>
</head>

<body>

<pre><div id="info">In attesa di aggiornamento post-riordinamento</div></pre>

<div id="lista-prova">

	<li id="oggettoItem_1">
		<div><img src="arrow.png" width="48" height="48" class="trascinabile" /><strong>Oggetto 1</strong></div>
	</li>
	
	<li id="oggettoItem_2">
	<img src="arrow.png" width="48" height="48" class="trascinabile" />
	<strong>Oggetto 2</strong>
	</li>
	
	<li id="oggettoItem_3">
	<img src="arrow.png" width="48" height="48" class="trascinabile" /><strong>Oggetto 3</strong>
	</li>
	
	<li id="oggettoItem_4"><img src="arrow.png" width="48" height="48" class="trascinabile" /><strong>Oggetto 4</strong></li>
</div>

<!--

Ricordati di chiamare l'ID degli elementi che vanno riordinati usando in coda la dicitura Item_1 dove 1 è il numero dell'elemento. E' indispensabile perchè tutto funzioni e i dati definiscano correttamente l'array

-->

<script src="../../../common/jquery/jquery.min.js"></script>
<!-- <script src="../../common/bootstrap3/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<script type="text/javascript">
  
  $(document).ready(function() {
    $("#lista-prova").sortable({
      handle : '.trascinabile', /* sortable elements */
      update : function () { // aggiorno l'ordine ed eseguo una callback
		var ordina = $('#lista-prova').sortable('serialize'); // salvo una variabile che contiene l'array con il nuovo ordine degli elementi
  		$("#info").load("riordinamento.php?"+ordina);
      }
    });
});
</script>

</body>
</html>