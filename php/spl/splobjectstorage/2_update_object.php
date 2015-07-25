<?php

class StorageTest {
    private $title;
 
    public function __construct( $title ) {
        $this->title = $title;
    }
 
    public function setTitle( $title ) {
        $this->title = $title;
    }

    public function __toString() {
        return $this->title;
    }
}
 
$storage = new SplObjectStorage();
$obj = new StorageTest( "wiki.cc" );
$storage->attach( $obj );
$obj->setTitle( "eide.org" );
 
$storage->attach( $obj );
 
foreach( $storage as $o ) {
        echo $o;
        echo "\n";
}
