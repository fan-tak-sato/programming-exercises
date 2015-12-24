<?php

class BookTitleExclaimDecorator extends BookTitleDecorator {

    private $btd;

    public function __construct(BookTitleDecorator $btd_in) {
        $this->btd = $btd_in;
    }

    public function exclaimTitle() {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}