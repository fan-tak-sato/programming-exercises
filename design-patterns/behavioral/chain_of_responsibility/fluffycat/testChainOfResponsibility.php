<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('AbstractBookTopic.php');
  include_once('BookTopic.php');
  include_once('BookSubTopic.php');
  include_once('BookSubSubTopic.php');

  writeln("BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN");
  writeln("");

  $bookTopic = new BookTopic("PHP 5");
  writeln("bookTopic before title is set:");
  writeln("topic: " . $bookTopic->getTopic());
  writeln("title: " . $bookTopic->getTitle());
  writeln("");
  $bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens");
  writeln("bookTopic after title is set: ");
  writeln("topic: " . $bookTopic->getTopic());
  writeln("title: " . $bookTopic->getTitle());
  writeln("");
  
  $bookSubTopic = new BookSubTopic("PHP 5 Patterns",$bookTopic);
  writeln("bookSubTopic before title is set: ");
  writeln("topic: " . $bookSubTopic->getTopic());
  writeln("title: " . $bookSubTopic->getTitle());
  writeln("");
  $bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra");
  writeln("bookSubTopic after title is set: ");
  writeln("topic: ". $bookSubTopic->getTopic());
  writeln("title: ". $bookSubTopic->getTitle());
  writeln("");
  
  $bookSubSubTopic = new BookSubSubTopic("PHP 5 Patterns for Cats",
    $bookSubTopic);
  writeln("bookSubSubTopic with no title set: ");
  writeln("topic: " . $bookSubSubTopic->getTopic());
  writeln("title: " . $bookSubSubTopic->getTitle());
  writeln("");
  $bookSubTopic->setTitle(NULL);
  writeln("bookSubSubTopic with no title for set for bookSubTopic either:");
  writeln("topic: " . $bookSubSubTopic->getTopic());
  writeln("title: " . $bookSubSubTopic->getTitle());
  writeln("");

  writeln("END TESTING CHAIN OF RESPONSIBILITY PATTERN");

  function writeln($line_in) {
    echo $line_in."<"."BR".">";
  }

?>
