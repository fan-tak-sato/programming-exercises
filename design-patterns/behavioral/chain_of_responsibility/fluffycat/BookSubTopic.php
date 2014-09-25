<?php

/**
 * @author Lawrence Truett and FluffyCat.com 2005
 */ 
class BookSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;
    
    /**
     * @param string $topic_in
     * @param BookTopic $parentTopic_in
     */
    public function __construct($topic_in, BookTopic $parentTopic_in)
    {
      $this->topic = $topic_in;
      $this->parentTopic = $parentTopic_in;
	  $this->title = NULL;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getParentTopic()
    {
        return $this->parentTopic;
    }

    public function getTitle()
    {
        if (NULL != $this->title) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }
    
    /**
     * @param string $title_in
     */
    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}
