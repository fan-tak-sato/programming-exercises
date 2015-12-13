<?php

class StrategyContext {

    private $strategy = NULL;

    /**
     * BookList is not instantiated at construct time
     *
     * @param $strategy_ind_id
     */
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "C":
                $this->strategy = new StrategyCaps();
                break;
            case "E":
                $this->strategy = new StrategyExclaim();
                break;
            case "S":
                $this->strategy = new StrategyStars();
                break;
        }
    }

    /**
     * @param mixed $book
     * @return mixed
     */
    public function showBookTitle($book) {
        return $this->strategy->showTitle($book);
    }
}

interface StrategyInterface {
    public function showTitle(Book $book_in);
}

class StrategyCaps implements StrategyInterface {

    private $titleCount;

    /**
     * @param $book_in
     * @return string
     */
    public function showTitle(Book $book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper ($title);
    }
}

class StrategyExclaim implements StrategyInterface {

    private $titleCount;

    /**
     * @param int $book_in
     * @return string
     */
    public function showTitle(Book $book_in) {

        $title = $book_in->getTitle();

        $this->titleCount++;

        return Str_replace(' ', '!', $title);
    }
}

class StrategyStars implements StrategyInterface {

    private $titleCount;

    public function showTitle(Book $book_in) {

        $title = $book_in->getTitle();

        $this->titleCount++;

        return Str_replace(' ', '*', $title);
    }
}

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
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

$book = new Book('PHP for Cats','Larry Truett');

$strategyContextC = new StrategyContext('C');
$strategyContextE = new StrategyContext('E');
$strategyContextS = new StrategyContext('S');

?>
<h1>STRATEGY PATTERN</h1>

<p><strong>test 1 - show name context C:</strong> <?php echo $strategyContextC->showBookTitle($book); ?></p>

<p><strong>test 2 - show name context E:</strong> <?php echo $strategyContextE->showBookTitle($book); ?></p>

<p><strong>test 3 - show name context S:</strong> <?php echo $strategyContextS->showBookTitle($book); ?></p>
