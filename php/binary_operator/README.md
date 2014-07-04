Task
=========

Implement the function accumulate below in the language of your choice. The code is in PHP but the syntax of this question should translate into any language. You should have enough information from the comments to define this function correctly. You do not need to implement the function calc.


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

/**
 * This function should go through the array of operands and run calc on each operand IN ORDER, then
 * return the accumulated value.
 *
 * For example the code below would echo the value 10:
 *
 * $op = new Addition(); //class Addition obviously implements iBinaryOperator
 * $operands = array(5,2,3);
 * echo accumulate($op, $operands);
 *
 * This function should work for ANY size array of operands, and ANY class that implements iBinaryOperator
 *
 * @param iBinaryOperator $op
 * @param array $operands array of integers of size N, can be empty
 * @return int|string returns an int on successful accumulation, or the string 'error' in error conditions
*/
function accumulate(iBinaryOperator $op, array $operands)
{
	// Add code here in the language of your choice
}