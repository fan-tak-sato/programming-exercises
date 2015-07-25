<?php

class Observable implements SplSubject
{
    private $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }
d
    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->storage as $obj) {
            $obj->update($this);
        }
    }
}

abstract class Observer implements SplObserver
{
    private $observable;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->attach($this);
    }

    public function update(SplSubject $subject)
    {
        if ($subject === $this->observable) {
            $this->doUpdate($subject);
        }
    }

    abstract function doUpdate(Observable $observable);
}

class ConcreteObserver extends Observer
{
    public function doUpdate(Observable $observable)
    {
        
    }
}

$observable = new Observable();

new ConcreteObserver($observable);

