<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

  include_once('BridgeBookAuthorTitle.php');
  include_once('BridgeBookTitleAuthor.php');

  define('BR', '<'.'BR'.'>');

  echo 'BEGIN TESTING BRIDGE PATTERN'.BR;
  echo BR;
  
  echo 'test 1 - author title with caps'.BR;
  $book = 
    new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','CAPS');
  echo $book->showAuthorTitle();
  echo BR.BR;

  echo 'test 2 - author title with stars'.BR;
  $book = 
    new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','STARS');
  echo $book->showAuthorTitle();
  echo BR.BR;

  echo 'test 3 - title author with caps'.BR;
  $book = 
    new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','CAPS');
  echo $book->showTitleAuthor();
  echo BR.BR;

  echo 'test 4 - title author with stars'.BR;
  $book = 
    new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','STARS');
  echo $book->showTitleAuthor();
  echo BR.BR;

  echo 'END TESTING BRIDGE PATTERN'.BR;

?>