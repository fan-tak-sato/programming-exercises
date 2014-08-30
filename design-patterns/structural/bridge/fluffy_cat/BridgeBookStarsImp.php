<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved 
  
  include_once('BridgeBookImp.php');  
  
  class BridgeBookStarsImp extends BridgeBookImp {    
  
    function showAuthor($author_in) {
      return Str_replace(" ","*",$author_in); 
    }
    
    function showTitle($title_in) {
      return Str_replace(" ","*",$title_in); 
    }
    
  }
?>