<?php

abstract class ListItem {
     
    protected $description = "";
    protected $datedue = null;
    protected $datecreated = null;
    protected $datecompleted = null;
     
    function __construct( $description, $datedue=null ) {
         
        $this->setDescription( $description );
        $this->setDateDue( $datedue );
        $this->setDateCreated( time() );
    }
     
    function getComposite() {
        return null;
    }
     
    function setDescription( $description ) {
        $this->description = $description;
    }
     
    function getDescription() {
        return $this->description;
    }
     
    function setDateDue( $datedue ) {
        $this->datedue = $datedue ;
    }
     
    function getDateDue() {
        return $this->datedue;
    }
     
    function setDateCompleted( $datecompleted ) {
        $this->datecompleted = $datecompleted;
    }
     
    function getDateCompleted() {
        return $this->datecompleted;
    }
     
    function setDateCreated( $datecreated ) {
        $this->datecreated = $datecreated;
    }
     
    function getDateCreated() {
        return $this->datecreated;
    }
     
}
