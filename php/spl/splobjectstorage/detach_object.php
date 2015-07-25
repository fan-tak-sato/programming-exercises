<?php

class StorageTest {

    private $title;
 
    public function __construct($title) {
        $this->title = $title;
    }
 
    public function __toString() {
        return $this->title;
    }
}
 
$storage = new SplObjectStorage();

$obj = new StorageTest( "eide.org" );

$storage->attach( $obj );
if( $storage->contains($obj) ) {
    echo "storage contains the object\n";
} else {
    echo "storage does NOT contain the object\n";
}

$storage->detach( $obj );
if( $storage->contains( $obj ) ) {
    echo "storage contains the object\n";
} else {
    echo "storage does NOT contain the object\n";
}
