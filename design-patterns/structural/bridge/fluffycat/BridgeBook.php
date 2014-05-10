<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved
  
  include_once('BridgeBookCapsImp.php');
  include_once('BridgeBookStarsImp.php');  
  
  abstract class BridgeBook {
      
    private $bbAuthor;
    private $bbTitle;
    private $bbImp;
    
    function __construct($author_in, $title_in, $choice_in) {
      $this->bbAuthor = $author_in;
      $this->bbTitle  = $title_in;
      if ('STARS' == $choice_in) {
        $this->bbImp = new BridgeBookStarsImp();
      } else {
        $this->bbImp = new BridgeBookCapsImp();
      }
    }    
  
    function showAuthor() {
      return $this->bbImp->showAuthor($this->bbAuthor);
    }
    
    function showTitle() {
      return $this->bbImp->showTitle($this->bbTitle);
    }
  
  }
?>