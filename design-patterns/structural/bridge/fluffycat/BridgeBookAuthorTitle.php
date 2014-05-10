<?php
  
//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved
  
  include_once('BridgeBook.php');;  
  
  class BridgeBookAuthorTitle extends BridgeBook {    
  
    function showAuthorTitle() {
      return $this->showAuthor() . "'s " . $this->showTitle();
    }
  
  }
  
?>