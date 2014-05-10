<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved 
  
  include_once('BridgeBookImp.php');  
  
  class BridgeBookCapsImp extends BridgeBookImp {    
  
    function showAuthor($author_in) {
      return strtoupper($author_in); 
    }
    
    function showTitle($title_in) {
      return strtoupper($title_in); 
    }
    
  }
?>