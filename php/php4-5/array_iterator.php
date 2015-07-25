<?php

$real = new ArrayIterator( array("S" => "Clark Kent", "S" => "Bruce Wayne", "I" => "Tony Stark") );
$superhero = new ArrayIterator( array("Superman","Batman","Iron Man") );

$team = new MultipleIterator();
$team->attachIterator($real);
$team->attachIterator($superhero);

foreach($team as $item) {
	var_dump($team->key());
	var_dump($team->current());
}

// It works with PHP5.5!
/*
foreach($team as $key => $item) {
	var_dump($key);
	var_dump($item);
}
*/