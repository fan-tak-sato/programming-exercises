<?php

class BookTopic extends AbstractBookTopic {

    private $topic;
    private $title;

    /**
     * @param $topic_in
     */
    public function __construct($topic_in) {
        $this->topic = $topic_in;
        $this->title = NULL;
    }

    /**
     * @return mixed
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * This is the end of the chain - returns title or says there is none
     *
     * @return null|string
     */
    public function getTitle() {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return 'there is no title avaialble';
        }
    }

    /**
     * @inheritDoc
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }
}