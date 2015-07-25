<?php
$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

foreach($xml->children() as $books) {
    foreach($books->children() as $book => $data) {
        echo $data->id."<br />";
        echo $data->title."<br />";
        echo $data->author."<br />";
        echo "<hr>";
    }
}
