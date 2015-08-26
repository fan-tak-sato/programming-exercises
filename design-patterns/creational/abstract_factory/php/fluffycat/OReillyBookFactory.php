<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  include_once('AbstractBookFactory.php');
  
  include_once('OReillyPHPBook.php');
  include_once('OReillyMySQLBook.php');
  
  class OReillyBookFactory extends AbstractBookFactory {
  
    private $context = "OReilly";  
  
    function makePHPBook() {return new OReillyPHPBook;}
    
    function makeMySQLBook() {return new OReillyMySQLBook;}
  
  }

?>
