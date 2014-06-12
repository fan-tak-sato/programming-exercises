<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('BookReader.php');  
  include_once('BookMark.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING MEMENTO PATTERN";
  echo tagins("br").tagins("br");
  
  $bookReader = new BookReader("Core PHP Programming, Third Edition","103");
  $bookMark = new BookMark($bookReader);
  
  echo "(at beginning) bookReader title: ".
    $bookReader->getTitle().tagins("br");
  echo "(at beginning) bookReader page: ".
    $bookReader->getPage().tagins("br");
  
  $bookReader->setPage("104");
  $bookMark->setPage($bookReader);
  
  echo "(one page later) bookReader page: ".
    $bookReader->getPage().tagins("br");  
  
  $bookReader->setPage('2005');  //oops! a typo
  
  echo "(after typo) bookReader page: ".
    $bookReader->getPage().tagins("br");    
  
  $bookMark->getPage($bookReader);
  
  echo "(back to one page later) bookReader page: ".
    $bookReader->getPage().tagins("br");    

  echo tagins("br");
  echo "END TESTING MEMENTO PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
