<?php

class Book
{
	public function setBook($author, $title)
	{
		return "$author - $title";
	}
}

class MyObj
{
	public function __call($method, $args)
	{
		return call_user_func_array(array(new Book, $method), $args);
	}
}

$foo = new MyObj();

$a = $foo->setBook("Stephen King", "IT");

echo $a;

