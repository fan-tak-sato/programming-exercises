<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

  include_once('SimpleBook.php');
  include_once('BookAdapter.php');

  define('BR', '<'.'BR'.'>');

  echo 'BEGIN TESTING ADAPTER PATTERN'.BR;
  echo BR;

  $book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides",
                         "Design Patterns");
  
  $bookAdapter = new BookAdapter($book);
  
  echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();

  echo BR.BR;
  echo 'END TESTING ADAPTER PATTERN'.BR;

?>
