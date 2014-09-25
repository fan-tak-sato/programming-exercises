<?php

/**
 * @author Lawrence Truett and FluffyCat.com 2005
 */ 
class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    /**
     * 
     * @param string $topic_in
     */
    public function __construct($topic_in)
    {
        $this->topic = $topic_in;
        $this->title = NULL;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * this is the end of the chain - returns title or says there is none
     * 
     * @return string
     */
    public function getTitle() {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return 'there is no title avaialble';
        }
    }
    
    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }

}
