<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('OReillyBookFactory.php');  
  include_once('SamsBookFactory.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING ABSTRACT FACTORY PATTERN";
  echo tagins("br").tagins("br");
  
  echo 'testing OReillyBookFactory'.tagins("br");
  $bookFactoryInstance = new OReillyBookFactory;
  testConcreteFactory($bookFactoryInstance);
  
  echo tagins("br");
  
  echo 'testing SamsBookFactory'.tagins("br");
  $bookFactoryInstance = new SamsBookFactory;
  testConcreteFactory($bookFactoryInstance);  
  
  echo tagins("br");
  echo "END TESTING ABSTRACT FACTORY PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");

  function testConcreteFactory($bookFactoryInstance) {
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    echo 'first php Author: '. 
	  $phpBookOne->getAuthor().tagins("br");
    echo 'first php Title: '.
	  $phpBookOne->getTitle().tagins("br");
	  
    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    echo 'second php Author: '.
	  $phpBookTwo->getAuthor().tagins("br");
    echo 'second php Title: '.
	  $phpBookTwo->getTitle().tagins("br");
    
	$mySqlBook = $bookFactoryInstance->makeMySQLBook();
    echo 'MySQL Author: '.
	  $mySqlBook->getAuthor().tagins("br");
    echo 'MySQL Title: '.
	  $mySqlBook->getTitle().tagins("br");
  }
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
