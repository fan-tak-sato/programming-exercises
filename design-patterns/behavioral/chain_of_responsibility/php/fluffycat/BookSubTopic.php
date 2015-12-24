<?php

class BookSubTopic extends AbstractBookTopic {

    private $topic;
    private $parentTopic;
    private $title;

    /**
     * @param string $topic_in
     * @param BookTopic $parentTopic_in
     */
    public function __construct($topic_in, BookTopic $parentTopic_in) {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }

    /**
     * @return string
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * @return BookTopic
     */
    public function getParentTopic() {
        return $this->parentTopic;
    }

    /**
     * @return null|string
     */
    public function getTitle() {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }

    /**
     * @inheritDoc
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }
}