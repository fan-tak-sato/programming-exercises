<?php

/**
 * @author Lawrence Truett and FluffyCat.com 2005
 */
abstract class AbstractBookTopic
{
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}