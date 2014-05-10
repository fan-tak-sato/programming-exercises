<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('OReillyFactoryMethod.php');  
  include_once('SamsFactoryMethod.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING FACTORY METHOD PATTERN";
  echo tagins("br").tagins("br");
  
  echo 'testing OReillyFactoryMethod'.tagins("br");
  $factoryMethodInstance = new OReillyFactoryMethod;
  testFactoryMethod($factoryMethodInstance);
  
  echo tagins("br");
  
  echo 'testing SamsFactoryMethod'.tagins("br");
  $factoryMethodInstance = new SamsFactoryMethod;
  testFactoryMethod($factoryMethodInstance);
  
  echo tagins("br");
  echo "END TESTING FACTORY METHOD PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");

  function testFactoryMethod($factoryMethodInstance) {

    $phpUs = $factoryMethodInstance->makePHPBook("us");
    echo 'us php Author: '.	
	  $phpUs->getAuthor().tagins("br");
    echo 'us php Title: '.	
	  $phpUs->getTitle().tagins("br");

    $phpUs = $factoryMethodInstance->makePHPBook("other");
    echo 'other php Author: '.	
	  $phpUs->getAuthor().tagins("br");
    echo 'other php Title: '.	
	  $phpUs->getTitle().tagins("br");
	  
    $phpUs = $factoryMethodInstance->makePHPBook("otherother");
    echo 'otherother php Author: '.	
	  $phpUs->getAuthor().tagins("br");
    echo 'otherother php Title: '.	
	  $phpUs->getTitle().tagins("br");	  
	  
  }
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
