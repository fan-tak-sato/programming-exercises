<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Bootstrap JQUERY UI sort and post to PHP file</title>

<link href="../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

<style>
.list-group-item {
	cursor: move;
}
</style>

</head>

<body>

<div class="container">

	<h1>Bootstrap JQUERY UI sort and post to PHP file</h1>
	
	<pre>
		<div id="info">Waiting for a new sorting...</div>
	</pre>

	<ul id="lista-prova">
	
		<li id="1"></li>
		
		<li id="oggettoItem_1" class="list-group-item list-group-item-info">
			<div class="trascinabile">
				<strong>Oggetto 1</strong>
			</div>
		</li>
		
		<li id="oggettoItem_2" class="list-group-item list-group-item-info">
			<div class="trascinabile">
				<strong>Oggetto 2</strong>
			</div>
		</li>
		
		<li id="oggettoItem_3" class="list-group-item list-group-item-info">
			<div class="trascinabile">
				<strong>Oggetto 3</strong>
			</div>
		</li>
		
		<li id="oggettoItem_4" class="list-group-item list-group-item-info">
			<div class="trascinabile">
				<strong>Oggetto 4</strong>
			</div>
		</li>
	
	</ul>
	
</div>

<script src="../../common/jquery/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<script type="text/javascript">
  
$(document).ready(function() {
	
    $("#lista-prova").sortable({
			handle : '.trascinabile', /* sortable elements */
			update : function () { /* Execute a callback to sort order */
			var ordina = $('#lista-prova').sortable('serialize'); /* serialize data and save it into a variable */
			$("#info").load("riordinamento.php?"+ordina+'&group='+$('#1').attr('id') ); /* Passing data via query string... */
		}
	});
	
});
</script>

</body>
</html>