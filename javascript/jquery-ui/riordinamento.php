<?php

$sql = array();

if (isset($_GET['oggettoItem'])):
	foreach ($_GET['oggettoItem'] as $position => $item) :
		$sql[] = "UPDATE `table` SET `position` = $position WHERE `id` = $item";
	endforeach;
endif;

print_r($sql);

echo $_GET['group'];
