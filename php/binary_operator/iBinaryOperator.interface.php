<?php

/**
 * This interface should be implemented to represent doing a binary operation on two integers 
 */
interface iBinaryOperator
{
	/**
	 * This will take int $x and int $y and return an integer value or throw an exception
	 *
	 * @param int $x
	 * @param int $y
	 * @return int the value of the binary operation of $x and $y
	 * @throws MathException
	 */
	public function calc($x, $y);
}