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

$obj = new StorageTest( "wiki.cc" );

$storage->attach( $obj );

$obj2 = new StorageTest( "eide.org" );
 
if( $storage->contains( $obj ) ) {
    echo "storage contains the object\n";
} else {
    echo "storage does NOT contain the object\n";
}

if( $storage->contains( $obj2 ) ) {
    echo "storage contains the object\n";
} else {
    echo "storage does NOT contain the object\n";
}
