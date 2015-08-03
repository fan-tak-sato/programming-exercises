<?php

class Sample
{
	static function callMe()
	{
		return 'me';
	}
}

$sample = new Sample();

echo Sample::callMe(), '<br>';

echo $sample->callMe(), '<br>'; // You can call static method dynamically

// NOTE: It's safe to call static methods dynamically, and you can do so – but the opposite is not true so you can only call non-static methods non-statically
