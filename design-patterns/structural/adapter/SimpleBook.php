<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved
  
  class SimpleBook {

    private $author;
    private $title;

    function __construct($author_in, $title_in) {
      $this->author = $author_in;
      $this->title  = $title_in;
    }

    function getAuthor() {return $this->author;}

    function getTitle() {return $this->title;}

  }

?>
