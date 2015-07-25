<?php
$dll = new SplDoublyLinkedList();

$dll->push(2);
$dll->push(3);
$dll->push(4);
 
$dll->rewind();
 
while ($tmp = $dll->current()) {
	echo "ITEM: $tmp\n";
	$dll->next();
}
