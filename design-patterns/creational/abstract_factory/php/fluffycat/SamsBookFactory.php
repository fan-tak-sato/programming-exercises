<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  include_once('AbstractBookFactory.php');
  
  include_once('SamsPHPBook.php');
  include_once('SamsMySQLBook.php');
  
  class SamsBookFactory extends AbstractBookFactory {
  
    private $context = "Sams";   
  
    function makePHPBook() {return new SamsPHPBook;}
    
    function makeMySQLBook() {return new SamsMySQLBook;}
  
  }

?>
