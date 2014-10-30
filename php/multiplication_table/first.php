<?php
$rows = 10;
$cols = 10;
?>
<h1>Mutiplication table</h1>
<table border="0" width="70%">
<?php
for ($r = 1; $r <=$rows; $r++) {
	?><tr><?php
	for ($c = 1; $c <=$cols; $c++) {
		?><td style="text-align:center;font-weight: bold"><?php echo $c * $r ?></td><?php
	}
	?></tr><?php
}
?>
</table>