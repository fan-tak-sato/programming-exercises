<?php
 
class StorageTest {
    private $title;
 
    public function __construct( $title ) {
        $this->title = $title;
    }
 
    public function __toString() {
        return $this->title;
    }
}
 
$storage = new SplObjectStorage();

$obj = new StorageTest("wiki.cc");

$storage->attach($obj);

$obj2 = new StorageTest("eide.org");
$storage->attach( $obj2 );
 
foreach( $storage as $o ) {
        echo $o."<br>";
}

echo count($storage);
