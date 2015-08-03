<?php

/**
 * Subject, that who makes news
 */
class Newspaper implements \SplSubject{
    private $name;
    private $observers = array();
    private $content;
   
    public function __construct($name) {
        $this->name = $name;
    }

    //add observer
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }
   
    // remove observer
    public function detach(\SplObserver $observer) {
       
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }
   
    // set breakouts news
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }
   
    public function getContent() {
        return $this->content." (by {$this->name})";
    }
   
    // notify observers(or some of them)
    public function notify() {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}

/**
 * Observer,that who recieves news
 */
class Reader implements SplObserver{
    private $name;
   
    public function __construct($name) {
        $this->name = $name;
    }
   
    public function update(\SplSubject $subject) {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>';
    }
}

// Classes test
$newspaper = new Newspaper('Newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

// Add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

// Remove reader
$newspaper->detach($linda);

// Set break outs
$newspaper->breakOutNews('USA break down!');

//=========output==========
//Allen is reading breakout news USA break down! (by Newyork Times)
//Jim is reading breakout news USA break down! (by Newyork Times)