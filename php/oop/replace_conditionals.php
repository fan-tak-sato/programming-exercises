<?php

abstract class Addressable
{
    public function render($template)
    {
        if ($this instanceof User)
        {
            return sprintf($template, $this->getName(), $this->getName());
        }
		
        if ($this instanceof Brand)
        {
            return sprintf($template, $this->getUrl(), $this->getName());
        }
    }
}

class User extends Addressable
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function render($template)
    {
        if ($this instanceof User)
        {
            return sprintf($template, $this->getName(), $this->getName());
        }
        
        if ($this instanceof Brand)
        {
            return sprintf($template, $this->getUrl(), $this->getName());
        }
    }
}

class Brand extends Addressable
{
    private $name;
    private $url;

    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getURL()
    {
        return $this->url;
    }

    public function render($template)
    {
        if ($this instanceof User)
        {
            return sprintf($template, $this->getName(), $this->getName());
        }
        
        if ($this instanceof Brand)
        {
            return sprintf($template, $this->getUrl(), $this->getName());
        }
    }
}