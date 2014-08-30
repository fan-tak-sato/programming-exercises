<?php

include_once('AbstractFactoryMethod.php');

include_once('OReillyPHPBook.php');
include_once('SamsPHPBook.php');
include_once('VisualQuickstartPHPBook.php');

class SamsFactoryMethod extends AbstractFactoryMethod
{
    private $context = "Sams";  

    function makePHPBook($param)
    {
        $book = NULL;
        switch ($param) {
            case "us":
              $book = new SamsPHPBook;
              break;		
            case "other":
              $book = new OReillyPHPBook;
              break;
            case "otherother":
              $book = new VisualQuickstartPHPBook;
              break;
            default:
              $book = new SamsPHPBook;
              break;
        }
        return $book;
    }  
}
