<?php

define('PI', 3.14);

class T {
	const PI = PI;
}
class Math {
	const PI = T::PI;
}

echo Math::PI;
