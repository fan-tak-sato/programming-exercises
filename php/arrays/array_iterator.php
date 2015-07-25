<?php

class MyIterator implements IteratorAggregate {
    public function getIterator() {
        return new ArrayIterator( array(1,2,3) );
    }
}

// NOTE: the elements on the ArrayIterator will be printed without calling the getIterator() method!!!
$myIterator = new MyIterator();
foreach($myIterator as $num) {
	echo $num."<br>";
}
