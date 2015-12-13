<?php

class Book {

	private $author;
	private $title;

	/**
	 * @param string $title_in
	 * @param string $author_in
	 */
	public function __construct($title_in, $author_in) {
		$this->author = $author_in;
		$this->title  = $title_in;
	}

	/**
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return string
	 */
	public function getAuthorAndTitle() {
		return $this->getTitle().' by '.$this->getAuthor();
	}
}

class CaseReverseFacade {

	public static function reverseStringCase($stringIn) {
		$arrayFromString = ArrayStringFunctions::stringToArray($stringIn);
		$reversedCaseArray = ArrayCaseReverse::reverseCase($arrayFromString);
		$reversedCaseString = ArrayStringFunctions::arrayToString($reversedCaseArray);
		return $reversedCaseString;
	}

}

class ArrayCaseReverse {

	private static $uppercase_array = 
				array('A', 'B', 'C', 'D', 'E', 'F',
				      'G', 'H', 'I', 'J', 'K', 'L',
				      'M', 'N', 'O', 'P', 'Q', 'R',
				      'S', 'T', 'U', 'V', 'W', 'X',
				      'Y', 'Z');

	private static $lowercase_array = 
				array('a', 'b', 'c', 'd', 'e', 'f',
				      'g', 'h', 'i', 'j', 'k', 'l',
				      'm', 'n', 'o', 'p', 'q', 'r',
				      's', 't', 'u', 'v', 'w', 'x',
				      'y', 'z');

	public static function reverseCase($arrayIn) {
		$array_out = array();

		for ($x = 0; $x < count($arrayIn); $x++) {
			if (in_array($arrayIn[$x], self::$uppercase_array)) {
				$key = array_search($arrayIn[$x], self::$uppercase_array);
				$array_out[$x] = self::$lowercase_array[$key];
			} elseif (in_array($arrayIn[$x], self::$lowercase_array)) {
				$key = array_search($arrayIn[$x], self::$lowercase_array);
				$array_out[$x] = self::$uppercase_array[$key];
			} else {
				$array_out[$x] = $arrayIn[$x];
			}
		}
		return $array_out;
	}
}

class ArrayStringFunctions {

	public static function arrayToString($arrayIn) {
		$string_out = NULL;
		foreach ($arrayIn as $oneChar) {
			$string_out .= $oneChar;
		}
		return $string_out;
	}

	public static function stringToArray($stringIn) {
		return str_split($stringIn);
	}
}

// TEST
$book = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
$bookTitleReversed = CaseReverseFacade::reverseStringCase($book->getTitle());  
?>

<h1>TESTING FACADE PATTERN</h1>
<p><strong>Original book title:</strong> <?php echo $book->getTitle() ?></p>
<p><strong>Reversed book title:</strong> <?php echo $bookTitleReversed ?></p>

