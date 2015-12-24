<?php

abstract class BookCommand {

    protected $bookCommandee;

    /**
     * @param $bookCommandee_in
     */
    public function __construct(BookCommandee $bookCommandee_in) {
        $this->bookCommandee = $bookCommandee_in;
    }

    abstract function execute();

}
