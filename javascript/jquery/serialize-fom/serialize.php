<?php

if ($_REQUEST["name"])
{
	$name = $_REQUEST['name'];
	$sex = $_REQUEST['sex'];
	$age = $_REQUEST['age'];

	echo "Welcome ". $name;
	echo "<br />Your age : ". $age;
	echo "<br />Your gender : ". $sex;
}
