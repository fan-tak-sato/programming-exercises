<?php

function solution($A)
{
	$extremes = array();
	$extremesMax = 0;
	$extremeMaxKey = '';
	
	if ( !is_array($A) )
	{
		return -1;
	}
	
	foreach($A as $key => $value)
	{
		if ($value < 0)
		{
			$extremes[$key] = (int) abs($value);
			if ($extremes[$key] > $extremesMax)
			{
				$extremesMax = $extremes[$key];
				$extremeMaxKey = $key;
			}
		}
	}
		
	if (!$extremeMaxKey)
	{
		return -1;
	}
	
	return $extremeMaxKey;
}
