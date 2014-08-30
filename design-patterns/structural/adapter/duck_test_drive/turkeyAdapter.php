<?php
include_once("duck.php");
class TurkeyAdapter implements Duck{
    
    private $turkey;
    
    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }
    
    public function quack(){
        $this->turkey->gobble();
    }
    
    public function fly(){
        $this->turkey->fly();
    }
}
