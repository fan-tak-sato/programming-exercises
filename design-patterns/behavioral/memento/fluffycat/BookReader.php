<?php

include_once('BookMark.php');
  
class BookReader {
    
    private $title;
    private $page;
    
    /**
     * @param type $title_in
     * @param type $page_in
     */
    public function __construct($title_in, $page_in) {
        $this->setPage($page_in);
        $this->setTitle($title_in);
    }
    
    /**
     * @param int $page_in
     */
    public function setPage($page_in) {
        $this->page = $page_in;
    }
    
    public function getPage() {
        return $this->page;
    }
    
    /**
     * @param string $title_in
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }
    
    public function getTitle() {
        return $this->title;
    }
}
