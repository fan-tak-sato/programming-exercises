<?php

$xml = simplexml_load_file("cars.xml") or die("Error: Cannot create object");

foreach($xml->children() as $cars) {
    foreach($cars->children() as $car => $data) {
        echo $data->manufacture['country'];
        echo "<br />";
    }
}