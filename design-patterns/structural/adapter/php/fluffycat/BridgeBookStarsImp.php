<?php

class BridgeBookStarsImp extends BridgeBookImp {
  
    function showAuthor($author_in) {
      return Str_replace(" ","*",$author_in); 
    }
    
    function showTitle($title_in) {
      return Str_replace(" ","*",$title_in); 
    }
    
  }
?>